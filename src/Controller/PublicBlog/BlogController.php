<?php

namespace App\Controller\PublicBlog;

use App\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Controller\CoreBlog\BaseController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends BaseController
{
    const RENDER_PREFIX = 'PublicBlog/';

    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        $articles = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        return $this->render('blog/index.html.twig', [
            'articleImgPath' => '\upload_files\articles\\',
            'articles' => $articles,
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
