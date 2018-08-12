<?php

namespace App\Controller\PublicBlog;

use App\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Controller\CoreBlog\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends BaseController
{
    const RENDER_PREFIX = 'PublicBlog/';

    /**
     * @Route("/blog", name="blog")
     */
    public function index(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM App\Entity\Article a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1) /*page number*/,
            3/*limit per page*/
        );

        return $this->render('blog/index.html.twig', [
            'articleImgPath' => '\upload_files\articles\\',
            'pagination' => $pagination,
//            'title' => $articles[0]->getTitle(),
//            'shortContent' => $shortContent,

        ]);
    }

    /**
     * @Route("/article/{slug}", name="article")
     * @ParamConverter("article")
     */
    public function article(Article $article)
    {
        return $this->render('blog/article.html.twig', [
            'article' => $article,
            'articleImgPath' => '\upload_files\articles\\',
        ]);

        //$repository = $this->getDoctrine()->getRepository(Article::class);
        //$article = $repository->findOneBy(['slug' => $slug]);
        //var_dump($article);
        //exit;
    }
}
