<?php

namespace App\Service;

use GuzzleHttp\Client;

class CoingeckoService
{
    const ROUTE = '/api/v3/';

    /** @var Client */
    protected $client;

    /**
     * CoingeckoService constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }
}
