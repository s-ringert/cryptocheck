<?php

namespace App\Handler;

use App\Service\CryptoListService;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class CryptoListHandlerFactory implements FactoryInterface
{

    /**
     * @inheritDoc
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new CryptoListHandler(
            $container->get(CryptoListService::class)
        );
    }
}
