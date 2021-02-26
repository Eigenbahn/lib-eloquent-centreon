<?php

namespace App\Services\CentreonModel;


use App\Model\Eloquent\centreon\Host;
use App\Model\Eloquent\centreon\Service;
use App\Model\Eloquent\centreon\ServiceMacro;
use App\Services\CentreonRestApi\CentreonInternalRestApiService;

use App\Model\Eloquent\centreon_storage\HostService as HostServiceModel;
use App\Services\CentreonRestApi\CentreonRestApiService;
use Illuminate\Database\Eloquent\Builder;


class ServiceService {

    // -------------------------------------------------------------------
    // GENERAL

    static public $BRIEF_COLS = [
        'service_id',
        'service_description',
        'service_template_model_stm_id', // parent st
        'command_command_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Collection|Host[]
     */
    public function getList ($brief = false, $cols = []) {
        $selector = Service::where([
            'service_register' => '1', // not a template
            'service_activate' => '1', // enabled
        ]);

        if ($brief)
            $cols = self::$BRIEF_COLS;

        if ($cols)
            return $selector->get($cols);
        else
            return $selector->get();
    }

    public function format (Service $s, $brief = false, $cols = []) {
        if ($brief)
            $cols = self::$BRIEF_COLS;

        if ($cols)
            return array_filter(
                $s->toArray(),
                function ($key) use ($cols) {
                    return in_array($key, $cols);
                },
                ARRAY_FILTER_USE_KEY
            );
        else
            return $s;
    }

    /**
     * @param $hostName
     * @param $serviceDescription
     * @return Service|\Illuminate\Database\Eloquent\Model|null
     */
    public function getFromName ($hostName, $serviceDescription) {
        $host = Host::whereHostName($hostName)->first();

        $service = Service::whereServiceDescription($serviceDescription)
            ->whereHas('hosts', function ($q) use ($host) {
                /* @var Builder $q */
                return $q->whereKey($host->getKey());
            })->whereServiceRegister('1') // not a template
            ->whereServiceActivate('1') // enabled
            ->first();

        return $service;
    }

    public function delete (Host $host, Service $service) {
        $restApiSvc = new CentreonRestApiService(config('app.centreon_rest_api_url'),
            config('app.centreon_rest_api_username'), config('app.centreon_rest_api_password'));
        return $restApiSvc->deleteService($host, $service);
    }


    // -------------------------------------------------------------------
    // SERVICE TEMPLATES

    public function isTemplateDirectParentForService (Service $serviceTemplate, Service $service) {
        if (empty($service->parentTemplate))
            return false;
        if ($service->parentTemplate->service_description !== $serviceTemplate->service_description)
            return false;
        return true;
    }

    public function isTemplateParentForService (Service $serviceTemplate, Service $service) {
        if (empty($service->parentTemplate))
            return false;
        if ($service->parentTemplate->service_description !== $serviceTemplate->service_description)
            return $this->isTemplateParentForService($serviceTemplate, $service->parentTemplate);
        return true;
    }

    public function updateParentTemplate (Service $service, Service $serviceTemplate) {
        $service->parentTemplate()->associate($serviceTemplate);
        return $service->save();
    }

    // -------------------------------------------------------------------
    // MACROS

    /**
     * @param Service $service
     * @param array $macrosMap
     * @return bool
     */
    public function addMacro (Service $service, $macrosMap=[]) {
        foreach ($macrosMap as $k => $v) {

            /* @var ServiceMacro|null $parentMacro */
            $parentMacro = @$service->parentTemplate->macros()->where('svc_macro_name', $k)->first();

            $macro = new ServiceMacro();
            $macro->svc_macro_name = $k;
            $macro->svc_macro_value = $v;
            if (isset($parentMacro))
                $macro->is_password = $parentMacro->is_password;


            $macro->service()->associate($service);
            $resultSave = $macro->save();
            if (! $resultSave)
                return false;
        }
        return true;
    }

}
