<?php

namespace App\Services\CentreonRestApi;


use App\Model\Eloquent\centreon\Host;
use App\Model\Eloquent\centreon\Service;

class CentreonRestApiService {

    protected $client;

    protected $url;
    protected $urlSuffix = '?action=action&object=centreon_clapi';
    protected $username;
    protected $password;
    protected $authToken;

    public function __construct ($url, $username, $password) {
        $this->client = new \GuzzleHttp\Client();

        $this->url = $url;
        $this->username = $username;
        $this->password = $password;

        $this->authenticate();
    }


    // -------------------------------------------------------------------
    // HELPERS

    protected function request ($url, $method, $params) {
        $httpStatusCode = null;
        $response = null;
        try {
            $res = $this->client->request($method, $url, $params);
            $httpStatusCode = $res->getStatusCode();
            $response = $res->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $rawRequest = \GuzzleHttp\Psr7\str($e->getRequest());
            if ($e->hasResponse())
                $response = \GuzzleHttp\Psr7\str($e->getResponse());
            // TODO: log
            echo $response . '<br/>';
        }

        return [$httpStatusCode, $response];
    }

    protected function postFormRequest ($url, $contentMap, $headers=[]) {
        $params = ['form_params' => $contentMap ];
        if (! empty($headers))
            $params['headers'] = $headers;

        return $this->request($url, 'POST', $params);
    }

    protected function postJsonRequest ($url, $contentMap, $headers=[]) {
        $params = ['json' => $contentMap ];
        if (! empty($headers))
            $params['headers'] = $headers;

        return $this->request($url, 'POST', $params);
    }


    // -------------------------------------------------------------------
    // GENERIC

    public function authenticate () {
        $url = $this->url . '?action=authenticate';

        $contentMap = [
            "username" => $this->username,
            "password" => $this->password,
        ];

        list($resultCode, $response) = $this->postFormRequest($url, $contentMap);
        if ($resultCode === 200) {
            $resp = json_decode($response, true);
            $this->authToken = $resp['authToken'];
            return true;
        }
        return false;
    }


    // -------------------------------------------------------------------
    // HOST

    /**
     * @param Host $host
     * @return bool
     */
    public function applyAllParentTemplatesForHost (Host $host) {
        $url = $this->url . $this->urlSuffix;

        $contentMap = [
            "action" => "applytpl",
            "object" => "host",
            "values" => $host->host_name,
        ];

        list($resultCode, $response) = $this->postJsonRequest($url, $contentMap);
        return $resultCode === 200;
    }

    public function deleteParentTemplateForHost (Host $host, Host $hostTemplate) {
        $url = $this->url . $this->urlSuffix;

        $contentMap = [
            "action" => "deltemplate",
            "object" => "host",
            "values" => $host->host_name . ';' . $hostTemplate->host_name,
        ];

        list($resultCode, $response) = $this->postJsonRequest($url, $contentMap);
        return $resultCode === 200;
    }


    // -------------------------------------------------------------------
    // SERVICE

    public function deleteService (Host $host, Service $service) {
        $url = $this->url . $this->urlSuffix;

        $contentMap = [
            "action" => "del",
            "object" => "service",
            "values" => $host->host_name . ';' . $service->service_description,
        ];

        $headers = [
            'Content-Type' => 'application/json',
            'centreon-auth-token' => $this->authToken,
        ];

        list($resultCode, $response) = $this->postJsonRequest($url, $contentMap, $headers);
        return $resultCode === 200;
    }
}
