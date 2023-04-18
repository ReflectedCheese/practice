<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PracticeController extends AbstractController
{
    #[Route('/practice', name: 'practice')]
    public function index(): Response
    {
        $movies = ["Avengers: Endgame", "Inception", "Loki", "Black Widow" ];
        return $this->render('index.html.twig', array(
            'movies' => $movies
        ) );
    }
}
