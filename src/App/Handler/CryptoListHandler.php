<?php

namespace App\Handler;

use App\Service\CryptoListService;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class CryptoListHandler implements RequestHandlerInterface
{
    /** @var CryptoListService */
    protected $cryptoListService;

    /**
     * CryptoListHandler constructor.
     * @param CryptoListService $cryptoListService
     */
    public function __construct(CryptoListService $cryptoListService)
    {
        $this->cryptoListService = $cryptoListService;
    }

    /**
     * @inheritDoc
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $cryptoList = $this->cryptoListService->getList();

        return new JsonResponse($cryptoList);
    }
}
