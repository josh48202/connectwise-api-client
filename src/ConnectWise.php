<?php

namespace Wjbecker\ConnectwiseApiClient;

use GuzzleHttp\Client;
use Wjbecker\ConnectwiseApiClient\Endpoints\CompanySites;
use Wjbecker\ConnectwiseApiClient\Endpoints\OnHandSerialNumberses;

class ConnectWise
{
    use Options,
        CompanySites,
        OnHandSerialNumberses;

    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('connectwise-api-client.url').'/v4_6_release/apis/3.0/',
            'http_errors' => false,
            'headers' => [
                'Authorization' => 'Basic '.base64_encode(sprintf('%s+%s:%s', config('connectwise-api-client.company_id'), config('connectwise-api-client.public_key'), config('connectwise-api-client.private_key'))),
                'clientId' => config('connectwise-api-client.client_id'),
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ]
        ]);
    }

    public function get($uri)
    {
        return $this->request('GET', $uri, [
            'query' => [
                'conditions' => $this->conditions,
                'pageSize' => $this->pageSize
            ]
        ]);
    }

    protected function request($method, $uri, array $payload = [])
    {
        $response = $this->client->request($method, $uri, $payload);

        $statusCode = $response->getStatusCode();
        if ($statusCode < 200 || $statusCode > 299) {
            dd($statusCode);
//            return $this->handleRequestError($response);
        }

        return json_decode($response->getBody(), true);
    }

    protected function transformCollection($collection, $class): array
    {
        return array_map(fn ($data) => new $class($data, $this), $collection);
    }
}
