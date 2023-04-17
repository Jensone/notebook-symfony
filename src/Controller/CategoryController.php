<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    // Route qui permet de créer une nouvelle catégorie
    #[Route('/new-categorie', name: 'new_category', methods: ['GET', 'POST'])]
    public function newCategory()
    {

    }

    
    // Route qui permet de modifier une categorie
    #[Route('/update-categorie', name: 'update_category', methods: ['GET', 'POST'])]
    public function updateCategory()
    {

    }

    // Route qui permet de supprimer une catégorie
    #[Route('delete-categorie', name: 'delete_category', methods: ['GET', 'POST'])]
    public function deleteCategory(): void
    {
        
    }
}
