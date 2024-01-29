<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AllieController extends AbstractController
{
    #[Route('/allie', name: 'allie')]
    public function index(): Response
    {
        return $this->render('allie/index.html.twig', [
            'controller_name' => 'AllieController',
        ]);
    }
}
