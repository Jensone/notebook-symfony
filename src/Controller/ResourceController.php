<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResourceController extends AbstractController
{
    // Route qui permet de créer une nouvelle catégorie
    #[Route('/new-ressource', name: 'new_resource', methods: ['GET', 'POST'])]
    public function newResource()
    {

    }

    
    // Route qui permet de modifier une ressource
    #[Route('/update-ressource', name: 'update_resource', methods: ['GET', 'POST'])]
    public function updateResource()
    {

    }

    // Route qui permet de supprimer une catégorie
    #[Route('delete-ressource', name: 'delete_resource', methods: ['GET', 'POST'])]
    public function deleteResource(): void
    {
        
    }
}
