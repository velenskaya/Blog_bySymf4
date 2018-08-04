<?php

namespace App\Controller\PublicBlog;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('PublicBlog/main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
