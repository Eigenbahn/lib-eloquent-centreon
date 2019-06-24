<?php

namespace App\Services\CentreonModel;


use App\Model\Eloquent\centreon\Host;
use App\Model\Eloquent\centreon\Service;
use App\Model\Eloquent\centreon_storage\HostService as StorageHostService;


class HostServiceService {

    // -------------------------------------------------------------------
    // SYNC W/ centreon_storage

    /**
     * @param Host $host
     * @param Service $service
     * @return StorageHostService|\Illuminate\Database\Eloquent\Model|null
     */
    public function getInstanceSyncedInCentreonStorageDb (Host $host, Service $service) {
        return StorageHostService::where('host_id', '=', $host->getKey())
            ->where('service_id', '=', $service->getKey())
            ->first();
    }


}