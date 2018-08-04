<?php

namespace App\Controller\PublicBlog;

use App\Controller\CoreBlog\BaseController;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends BaseController
{
    const RENDER_PREFIX = 'PublicBlog/';

    /**
     * @Route("/about", name="about")
     */
    public function index()
    {
        return $this->render('about/index.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }

}
