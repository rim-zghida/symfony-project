<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
 #[Route("/api", "api_")]
//#[Route('/my_project', name: 'my_project', methods: ["GET"])]
class Univ22Controller extends AbstractController
{
    #[Route('/univ22', name: 'app_univ22')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Univ22Controller.php',
        ]);
    }
}
