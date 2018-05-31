<?php

namespace App\Controller;

use App\Form\ContactRequestType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        $form = $this->createForm(ContactRequestType::class);

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
