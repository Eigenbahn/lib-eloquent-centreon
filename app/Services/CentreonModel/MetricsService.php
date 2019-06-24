<?php

namespace App\Services\CentreonModel;

use DateTime;
use \DB;
use Illuminate\Support\Facades\Cache;

use App\Services\CentreonRestApi\CentreonInternalRestApiService;


class MetricsService {

    // -------------------------------------------------------------------
    // METRICS INVENTORY

    const inventory_cache_key = 'grafana_service_metrics_inventory';

    public function reloadCacheServiceMetricsInventory () {
        $inventory = $this->getAllServicesExposingMetrics();
        Cache::put(self::inventory_cache_key, $inventory, 60);
    }

    public function getServiceMetricsInventory ($filter = '') {
        $inventory = Cache::get(self::inventory_cache_key, null);

        if (!isset($inventory)) {
            $inventory = $this->getAllServicesExposingMetrics();
            Cache::put(self::inventory_cache_key, $inventory, 60);
        }

        if (! empty($filter)) {
            $inventory = array_filter($inventory, function($elem) use ($filter) {
                return preg_match('/' . strtolower($filter) . '/', strtolower($elem->{'text'})) === 1;
            });
            $inventory = array_values($inventory);
        }

        return $inventory;
    }

    protected function getAllServicesExposingMetrics () {
        $results = DB::select(
            "
            SELECT
              CONCAT(I.host_name, '.', I.service_description) AS text,
              CONCAT(I.host_id, '_', I.service_id) AS value
            FROM
              centreon_storage.index_data AS I,
              centreon_storage.services AS H_S
            WHERE
              EXISTS(
				SELECT
				  1
				FROM
				  centreon_storage.metrics AS M
				WHERE
				  M.index_id = I.id
				LIMIT 1
              )
              AND I.host_id = H_S.host_id
              AND I.service_id = H_S.service_id
              AND I.trashed = '0'
              AND H_S.enabled = '1'
            ;");

        return $results;
    }

    protected function getAllServicesExposingMetricsLikeRegex ($regex) {
        $results = DB::select(
            "
            SELECT
              CONCAT(I.host_name, '.', I.service_description) AS text,
              CONCAT(I.host_id, '_', I.service_id) AS value
            FROM
              centreon_storage.index_data AS I,
              centreon_storage.services AS H_S
            WHERE
              EXISTS(
				SELECT
				  1
				FROM
				  centreon_storage.metrics AS M
				WHERE
				  M.index_id = I.id
				LIMIT 1
              )
              AND I.host_id = H_S.host_id
              AND I.service_id = H_S.service_id
              AND I.trashed = '0'
              AND H_S.enabled = '1'
              AND LOWER(CONCAT(I.host_name, '.', I.service_description)) REGEXP LOWER('$regex')
            ;");

        return $results;
    }


    // -------------------------------------------------------------------
    // EXT

    public function hasServiceMetrics ($hostServiceId) {
        $inventory = Cache::get(self::inventory_cache_key, null);

        if (!isset($inventory)) {
            $inventory = $this->getAllServicesExposingMetrics();
            Cache::put(self::inventory_cache_key, $inventory, 60);
        }

        foreach ($inventory as $hostService) {
            if ($hostService->{'value'} === $hostServiceId)
                return true;
        }
        return false;
    }


}