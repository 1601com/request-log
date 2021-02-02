<?php

declare(strict_types=1);

namespace Agentur1601com\RequestLog\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Agentur1601com\RequestLog\RequestLogBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(RequestLogBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
