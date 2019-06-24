<?php

namespace App\Services\CentreonModel;

use DateTime;
use \DB;


class EventsService {

    // -------------------------------------------------------------------
    // MAIN

    protected function getEventsForServicesViaMysql ($from, $to, $hostId, $serviceId) {

        $results = DB::select(
            "
            SELECT
              E.start_time AS start_time,
              E.end_time AS end_time,
              I.host_name AS host,
              M.metric_name AS metric
            FROM
              index_data AS I,
              servicestateevents AS E
            WHERE
              I.trashed = '0'
              AND I.host_id = E.host_id
              AND I.service_id = E.service_id
              AND I.host_id = $hostId
              AND I.service_id = $serviceId
              AND E.start_time >= $from
              AND E.start_time <= $to
              GROUP BY E.start_time
              ORDER BY E.start_time ASC
            ;");

        return $results;
    }
}