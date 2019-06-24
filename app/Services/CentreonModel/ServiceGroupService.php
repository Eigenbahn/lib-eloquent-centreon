<?php

namespace App\Services\CentreonModel;


use App\Model\Eloquent\centreon\Service;
use App\Model\Eloquent\centreon\ServiceGroup;
use App\Model\Eloquent\centreon_storage\HostService as StorageHostService;
use App\Model\Eloquent\centreon_storage\ServiceGroup as StorageServiceGroup;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class ServiceGroupService {

    /**
     * @param ServiceGroup $hg
     * @return StorageServiceGroup
     */
    public function getInstanceSyncedInCentreonStorageDb (ServiceGroup $hg) {
        return StorageServiceGroup::find($hg->getKey());
    }

    /**
     * @param ServiceGroup $sg
     * @param StorageServiceGroup $syncedSg
     * @return Collection
     */
    public function getServiceIdsAssociationsNotSyncedInCentreonStorageDb (ServiceGroup $sg, StorageServiceGroup $syncedSg) {
        $sgServiceAssocsInCentreonDb = $this->getAssociatedServiceIdsForInstanceInCentreonDb($sg);
        $sgServiceAssocsInCentreonStorageDb = $this->getAssociatedServiceIdsForInstanceInCentreonStorageDb($syncedSg);

        return $sgServiceAssocsInCentreonDb->diff($sgServiceAssocsInCentreonStorageDb);
    }

    public function getAssociatedServiceIdsForInstanceInCentreonDb (ServiceGroup $sg) {
        $servicePrimaryKeyName = (new Service())->getKeyName();

        return Service::whereHas('serviceGroups', function ($q) use ($sg) {
            /* @var Builder $q */
            return $q->where($sg->getTable() . '.' . $sg->getKeyName(), $sg->getKey());
        })
            ->whereHas('hosts', function ($q) {
                /* @var Builder $q */
                return $q->whereHostActivate('1');
        }) // not from a disabled host
            ->whereServiceRegister('1') // not a template
            ->whereServiceActivate('1') // enabled
            ->pluck($servicePrimaryKeyName);
    }

    public function getAssociatedServiceIdsForInstanceInCentreonStorageDb (StorageServiceGroup $sg) {
        $servicePrimaryKeyName = (new StorageHostService())->getKeyName();

        return StorageHostService::whereHas('serviceGroups', function ($q) use ($sg) {
            /* @var Builder $q */
            return $q->where($sg->getTable() . '.' . $sg->getKeyName(), $sg->getKey());
        })->pluck($servicePrimaryKeyName);
    }
}