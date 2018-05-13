<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    /**
     * @Route("/about", name="about")
     */
    public function index()
    {
        return $this->render('about/index.html.twig', [
            'controller_name' => 'AboutController',
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
