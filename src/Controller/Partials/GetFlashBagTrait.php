<?php

declare(strict_types=1);

namespace ThreeBRS\SyliusShipmentExportPlugin\Controller\Partials;

use Sylius\Bundle\CoreBundle\Provider\FlashBagProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

trait GetFlashBagTrait
{
    private function getFlashBag(Request $request): FlashBagInterface
    {
        return FlashBagProvider::getFlashBag($request->getSession());
    }
}
