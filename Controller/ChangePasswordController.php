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

namespace vSymfo\Bundle\FOSUserBundle\Controller;

use FOS\UserBundle\Controller\ChangePasswordController as Controller;
use Symfony\Component\HttpFoundation\Response;
use vSymfo\Core\Traits\DocumentableControllerTrait;

class ChangePasswordController extends Controller
{
    use DocumentableControllerTrait;

    /**
     * {@inheritdoc}
     */
    public function render($view, array $parameters = array(), Response $response = null)
    {
        return $this->renderDocumentResponse(parent::render($view, $parameters, $response));
    }
}
