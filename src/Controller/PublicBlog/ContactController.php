<?php

namespace App\Controller\PublicBlog;

use App\Controller\CoreBlog\BaseController;
use App\Form\ContactRequestType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends BaseController
{
    const RENDER_PREFIX = 'PublicBlog/';

    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request)
    {
        $form = $this->createForm(ContactRequestType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contactRequest = $form->getData();

            $this->getDoctrine()->getManager()->persist($contactRequest);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
