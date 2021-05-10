<?php

declare(strict_types=1);

/*
 * This file is part of the BaguetteBoxBundle for Contao.
 *
 * (c) Stefan Schulz-Lauterbach
 *
 * @license LGPL-3.0-or-later
 */

namespace Clickpress\BaguetteboxBundle\ContaoManager;

use Clickpress\BaguetteboxBundle\ClickpressBaguetteboxBundle;
use Contao\CoreBundle\ContaoCoreBundle;
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
            BundleConfig::create(ClickpressBaguetteboxBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
