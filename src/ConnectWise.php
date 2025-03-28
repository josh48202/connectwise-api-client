<?php

namespace Wjbecker\ConnectwiseApiClient;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class ConnectWise
{
    public Client $client;
    public array $options = [];

    private array $with = [
        'conditions',
        'childConditions',
        'customFieldConditions',
        'orderBy',
        'fields',
        'columns',
        'page',
        'pageSize',
    ];

    protected ?string $model = null;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('connectwise-api-client.url').'/v4_6_release/apis/3.0/',
            'debug' => false,
            'http_errors' => false,
            'headers' => [
                'Authorization' => 'Basic '.base64_encode(sprintf('%s+%s:%s', config('connectwise-api-client.company_id'), config('connectwise-api-client.public_key'), config('connectwise-api-client.private_key'))),
                'clientId' => config('connectwise-api-client.client_id'),
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ]
        ]);
    }

    public function withOptions($options): self
    {
        $this->options = $options;
        return $this;
    }

    public function get($uri)
    {
        return $this->request('GET', $uri);
    }

    protected function request($method, $uri, $payload = null)
    {
        if ($method === 'POST') {
            $response = $this->client->request($method, $uri, ['json' => $payload]);
        } else {
            $response = $this->client->request($method, $uri, ['query' => $this->options]);
        }

        $statusCode = $response->getStatusCode();
        if ($statusCode < 200 || $statusCode > 299) {
            dd($statusCode, json_decode($response->getBody(), true));
//            return $this->handleRequestError($response);
        }

        $response = (array) json_decode($response->getBody(), true);

        if (is_null($this->model)) {
            return $response;
        }

        if (!$this->isCollection($response)) {
            return new $this->model($response, $this);
        }

        return new Collection(
            array_map(function ($item) {
                    return new $this->model($item, $this);
                }, $response
            )
        );
    }

    protected function isCollection(array $array): bool
    {
        // Keys of the array
        $keys = array_keys($array);

        // If the array keys of the keys match the keys, then the array must
        // not be associative (e.g. the keys array looked like {0:0, 1:1...}).
        return array_keys($keys) === $keys;
    }
}
