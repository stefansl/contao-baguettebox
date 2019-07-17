<?php

/*
 * This file is part of ClickpressBaguetteboxBundle.
 *
 * (c) Stefan Schulz-Lauterbach
 *
 * @license LGPL-3.0-or-later
 */

namespace Clickpress\Baguettebox\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(\Clickpress\Baguettebox\ClickpressBaguetteboxBundle::class)
                ->setLoadAfter([\Contao\CoreBundle\ContaoCoreBundle::class]),
        ];
    }
}
