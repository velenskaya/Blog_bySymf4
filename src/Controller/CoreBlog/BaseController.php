<?php
/**
 * Created by PhpStorm.
 * User: Oksalina
 * Date: 26.07.2018
 * Time: 19:47
 */

namespace App\Controller\CoreBlog;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    const RENDER_PREFIX = '';

    protected function render(string $view, array $parameters = array(), Response $response = null): Response
    {
        $view = static::RENDER_PREFIX . $view;

        return parent::render($view, $parameters, $response);
    }
}
