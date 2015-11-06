<?php

/*
 * This file is part of the vSymfo package.
 *
 * website: www.vision-web.pl
 * (c) Rafał Mikołajun <rafal@mikoweb.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace vSymfo\Bundle\FOSUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use vSymfo\Bundle\FOSUserBundle\DependencyInjection\vSymfoFOSUserBundleExtension;

/**
 * @author Rafał Mikołajun <rafal@mikoweb.pl>
 * @package vSymfo FOSUserBundle
 */
class vSymfoFOSUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        if (is_null($this->extension)) {
            $this->extension = new vSymfoFOSUserBundleExtension();
        }

        return $this->extension;
    }
}
