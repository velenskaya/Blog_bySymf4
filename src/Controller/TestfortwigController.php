<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestfortwigController extends Controller
{
    /**
     * @Route("/testfortwig", name="testfortwig")
     */
    public function index()
    {
        return $this->render('testfortwig/index.html.twig', [
            'controller_name' => 'TestfortwigController',
        ]);
    }
}
