<?php
// src/Controller/ContactController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="show_contact")
     */
    public function show(): Response
    {
        return $this->render('contact.html.twig');
    }
}