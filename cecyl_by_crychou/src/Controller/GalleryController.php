<?php
// src/Controller/GalleryController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GalleryController extends AbstractController
{
    /**
     * @Route("/galerie", name="show_gallery")
     */
    public function show(): Response
    {
        return $this->render('gallery.html.twig');
    }
}