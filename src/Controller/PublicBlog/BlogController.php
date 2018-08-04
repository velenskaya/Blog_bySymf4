<?php

namespace App\Controller\PublicBlog;

use App\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('PublicBlog/blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/article/{slug}", name="article")
     * @ParamConverter("article")
     */
    public function article(Article $article)
    {
        return $this->render('PublicBlog/blog/article.html.twig', [
            'article' => $article,
        ]);

        //$repository = $this->getDoctrine()->getRepository(Article::class);
        //$article = $repository->findOneBy(['slug' => $slug]);
        //var_dump($article);
        //exit;
    }
}
