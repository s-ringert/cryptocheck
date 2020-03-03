<?php

namespace App\Service;

use Psr\Http\Message\ResponseInterface;

class CryptoListService
{
    const ROUTE = CoingeckoService::ROUTE.'coins/list';

    /** @var CoingeckoService */
    protected $apiService;

    /**
     * CryptoListService constructor.
     * @param CoingeckoService $apiService
     */
    public function __construct(CoingeckoService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function getList()
    {
        $request = $this->apiService->getClient()->get(self::ROUTE);
        $body = $request->getBody();
        return json_decode($body);
    }
}
