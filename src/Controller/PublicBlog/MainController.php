<?php

namespace App\Controller\PublicBlog;

use App\Controller\CoreBlog\BaseController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends BaseController
{
    const RENDER_PREFIX = 'PublicBlog/';
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
