<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExerciceTpController extends AbstractController
{
    #[Route('/time/now', name:'index_heure')]
    public function DateTime(): Response
    {
        return new Response(date('d/m/Y à G:i:s'));
    }

    
    #[Route('/couleur/bleu', name:'index_bleu')]
    public function CouleurBleu():Response
    {
        return new Response("<div style='width:300px;height:300px;background-color:blue;margin:3Rem'></div>");
    }


    #[Route('/couleur/rouge', name:'index_rouge')]
    public function CouleurRouge():Response
    {
        return new Response("<div style='width:300px;height:300px;background-color:red;margin:3Rem'></div>");
    }





    #[Route('/exercice/tp', name: 'app_exercice_tp')]
    public function index(): Response
    {
        return $this->render('exercice_tp/index.html.twig', [
            'controller_name' => 'ExerciceTpController',
        ]);
    }
}
