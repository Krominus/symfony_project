<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnnemiController extends AbstractController
{
    #[Route('/ennemi', name: 'ennemi')]
    public function index(): Response
    {
        return $this->render('ennemi/index.html.twig', [
            'controller_name' => 'EnnemiController',
        ]);
    }
}
