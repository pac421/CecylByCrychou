<?php
// src/Controller/Admin/HomeController.php
namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/administration", name="show_admin_home")
     */
    public function show(): Response
    {
        return $this->render('admin/home.html.twig');
    }
}