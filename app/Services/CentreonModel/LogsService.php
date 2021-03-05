<?php

namespace App\Services\CentreonModel;

use DateTime;
use \DB;


class LogsService {

    // -------------------------------------------------------------------
    // MAIN

    public function getLogsForServicesViaMysql ($from, $to,
                                                $hostId, $serviceId,
                                                $pollerIds=[],
                                                $outputContains='',
                                                $notifications=false,
                                                $alertServiceStatuses=[],
                                                $hardOnly=false) {
        $this->getLogsViaMysql($from, $to, $hostId, $serviceId,
                               $pollerIds, $outputContains, $notifications,
                               [], $alertServiceStatuses,
                               $hardOnly);
    }

    public function getLogsForHostViaMysql ($from, $to,
                                            $hostId, $serviceId,
                                            $pollerIds=[],
                                            $outputContains='',
                                            $notifications=false,
                                            $alertHostStatuses=[],
                                            $hardOnly=false) {
        $this->getLogsViaMysql($from, $to, $hostId, $serviceId,
                               $pollerIds, $outputContains,
                               $notifications,
                               $alertHostStatuses, [],
                               $hardOnly);
    }

    public function getLogsViaMysql ($from, $to, $hostId=null, $serviceId=null, $pollerIds=[], $outputContains='',
                                     $notifications=false,
                                     $alertHostStatuses=[], $alertServiceStatuses=[], $hardOnly=false) {

        $innerJoinEngineLog = "";
        if ($pollerIds)
            $innerJoinEngineLog = ' INNER JOIN instances i ON i.name = logs.instance_name'
                                . ' AND i.instance_id IN ( ' . implode(',', $pollerIds) . ')';

        $outputFilter = "";
        if ($outputContains)
            $outputFilter = " AND logs.output LIKE %" . $outputContains . "%";

        $hostFilter = "";
        if ($hostId)
            $hostFilter = " AND host_id  = " . $hostId;
        $serviceFilter = "";
        if ($serviceId)
            $serviceFilter = " AND service_id  = " . $serviceId;

        $notificationsFilter = "";

        $alertHostFilter = "";
        if (! empty($alertHostStatuses)) {
            $alertServiceFilter = " OR (msg_type IN ('1', '10', '11') AND status IN " . implode(',', $alertHostStatuses) . ")";
            if ($notifications)
                $notificationsFilter .= "OR (msg_type = '" . self::MSG_TYPE_HOST_NOTIF . "' AND status IN " . implode(',', $alertHostStatuses) . ")";
        }
        $alertServiceFilter = "";
        if (! empty($alertServiceStatuses)) {
            $alertServiceFilter = " OR (msg_type IN ('0', '10', '11') AND status IN " . implode(',', $alertServiceStatuses) . ")";
            if ($notifications)
                $notificationsFilter .= "OR (msg_type = '" . self::MSG_TYPE_SERVICE_NOTIF . "' AND status IN " . implode(',', $alertServiceStatuses) . ")";
        }

        $hardOnlyFilter = "";
        if ($hardOnly)
            $hardOnlyFilter = " AND type ='" . self::HARD . "'";

        $results = DB::select(
            "SELECT DISTINCT
        logs.ctime,
        logs.host_id,
        logs.host_name,
        logs.service_id,
        logs.service_description,
        logs.msg_type,
        logs.notification_cmd,
        logs.notification_contact,
        logs.output,
        logs.retry,
        logs.status,
        logs.type,
        logs.instance_name
        FROM logs " . $innerJoinEngineLog
            .  "WHERE "
            . " logs.ctime > " . $from . " AND logs.ctime <= " . $end
            . $hostFilter
            . $serviceFilter
            . $outputFilter
            . " AND
            ("
            . $notificationsFilter
            . $alertHostFilter
            . $alertServiceFilter
            . ")"
            . $hardOnlyFilter
            . ";");

        return $results;
    }


    // -------------------------------------------------------------------
    // ENUMS

    const MSG_TYPE_SERVICE_NOTIF = 2;
    const MSG_TYPE_HOST_NOTIF = 3;

    const SOFT = 0;
    const HARD = 1;


    // --------------------------------------------------------------------
    // HELPERS - ENUMS

    protected function serviceStatusNameToId($statusName) {
        $map= [
            'OK'       => 0,
            'WARNING'  => 1,
            'CRITICAL' => 2,
            'UNKNOWN'  => 3,
            'PENDING'  => 4,
        ];
        return $map[$statusName];
    }

    protected function hostStatusNameToId($statusName) {
        $map= [
            'UP'          => 0,
            'DOWN'        => 1,
            'UNREACHABLE' => 2,
        ];
        return $map[$statusName];
    }
}
