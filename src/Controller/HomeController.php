<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController {
    #[Route('/home/index', name: 'home')]
    public function index(): Response {
        $titre = "Symfony 🐬";

        return $this->render('home/index.html.twig', compact("titre"));
    }
}