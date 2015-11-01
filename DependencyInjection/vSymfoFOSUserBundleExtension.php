<?php

/*
 * This file is part of the vSymfo package.
 *
 * website: www.vision-web.pl
 * (c) Rafał Mikołajun <rafal@vision-web.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace vSymfo\Bundle\FOSUserBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * @author Rafał Mikołajun <rafal@vision-web.pl>
 * @package vSymfo FOSUserBundle
 * @subpackage DependencyInjection
 */
class vSymfoFOSUserBundleExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {}

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return 'vsymfo_fos_user';
    }
}
