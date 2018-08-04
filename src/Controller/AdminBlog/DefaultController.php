<?php
namespace App\Controller\AdminBlog;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
    * @Route(name="adminka")
    */
    public function admin()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
