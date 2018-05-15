<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/article/{id}", name="article")
     */
    public function article($id)
    {
        return $this->render('news/article.html.twig', [
            'controller_name' => 'NewsController',
            'id' => $id,
        ]);
    }
}
