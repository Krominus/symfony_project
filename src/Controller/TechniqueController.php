<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TechniqueController extends AbstractController
{
    #[Route('/technique', name: 'app_technique')]
    public function index(): Response
    {
        return $this->render('technique/index.html.twig', [
            'controller_name' => 'TechniqueController',
        ]);
    }
}
