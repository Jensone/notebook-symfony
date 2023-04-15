<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\NoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/notes', name: 'notes', methods: ['GET'])]
    public function notes(NoteRepository $note): Response
    {
        return $this->render('page/notes.html.twig', [
            'note' => $note->findBy(
                [],
                ['id' => 'DESC']
            )
        ]);
    }

    #[Route('/categories', name: 'categories', methods: ['GET'])]
    public function categories(CategoryRepository $category): Response
    {
        return $this->render('page/categories.html.twig', [
            'note' => $category->findBy(
                [],
                ['id' => 'ASC']
            )
        ]);
    }

    #[Route('/ressources', name: 'ressources', methods: ['GET'])]
    public function ressources(CategoryRepository $category): Response
    {
        return $this->render('page/ressources.html.twig', [
            'note' => $category->findBy(
                [],
                ['id' => 'ASC']
            )
        ]);
    }
}
