<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgrametypesController extends AbstractController
{
    #[Route('/programetypes', name: 'app_programetypes')]
    public function index(): Response
    {
        return $this->render('programetypes/index.html.twig', [
            'controller_name' => 'ProgrametypesController',
        ]);
    }
}
