<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function index(): Response
    {
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }

    #[Route('/panier/ajout/{id}', name: 'app_ajout_id_dans_le_panier')]
    public function panierParId(): Response
    {
        // Le code pour récupérer les plats de la catégorie $categorie_id
        // et les afficher
        
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
            // D'autres données à passer à la vue si nécessaire
        ]);
    }









}
