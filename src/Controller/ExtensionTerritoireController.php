<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExtensionTerritoireController extends AbstractController
{
    #[Route('/extension/territoire', name: 'app_extension_territoire')]
    public function index(): Response
    {
        return $this->render('extension_territoire/index.html.twig', [
            'controller_name' => 'ExtensionTerritoireController',
        ]);
    }
}
