<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UniversityRepository;
#[Route("/api", "api_")]

 class UniversityController extends AbstractController
    {
        #[Route('/university', name: 'app_university', methods: ["GET"])]
        public function index(UniversityRepository $universityRepository ): JsonResponse
        {  
            $universities = $universityRepository->findAll();
            return $this->json([
                'university' =>  $universities,
                //'path' => 'src/Controller/UniversityController.php',
            ]);
          //  $universities = $universityRepository->findAll();
          //  return $this->json($universities);
        }
       
    }
    
      
