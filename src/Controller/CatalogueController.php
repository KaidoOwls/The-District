<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/', name: 'app_catalogue')]
    public function index(): Response
    {
        return $this->render('acceuil/index.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

    #[Route('/plats', name: 'app_plats')]
    public function plats(): Response
    {
        return $this->render('acceuil/index.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

    #[Route('/plats/{categorie_id}', name: 'app_plats_par_categorie')]
    public function platsParCategorie($categorie_id): Response
    {
        // Le code pour récupérer les plats de la catégorie $categorie_id
        // et les afficher
        
        return $this->render('acceuil/index.html.twig', [
            'categorie_id' => $categorie_id,
            // D'autres données à passer à la vue si nécessaire
        ]);
    }

    #[Route('/categories', name: 'app_categories')]
    public function categories(): Response
    {
        return $this->render('acceuil/index.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

}

