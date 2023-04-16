<?php

namespace App\Controller;

use App\Entity\Note;
use App\Repository\NoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoteController extends AbstractController
{
    // Route qui affiche une note en particulier
    #[Route('/note/{id}', name: 'show_note', methods: ['GET', 'POST'])]
    public function show($id, NoteRepository $oneNote): Response
    {
        // Affiche la note demandée dans le template dédié
        return $this->render('note/single.html.twig', [
            // Récupère la note demandée par son id
            'oneNote' => $oneNote->findOneBy(
                ['id' => $id]
            ),
            'note' => $oneNote->findBy(
                [],
                ['id' => 'DESC'],
                3)
        ]);
    }

    // Route qui permet de créer une nouvelle note
    #[Route('note/new', name: 'new_note', methods: ['GET', 'POST'])]
    public function newNote(NoteRepository $note)
    {
        return $this->render('note/new.html.twig', [
            'controller_name' => 'NoteController'
        ]);

    }

    // Route qui permet de modifier une nouvelle note
    #[Route('note/update', name: 'update_note', methods: ['GET', 'POST'])]
    public function updateNote(NoteRepository $note)
    {
        
    }

    // Route qui permet de supprimer une nouvelle note
    #[Route('note/delete', name: 'delete_note', methods: ['GET', 'POST'])]
    public function deleteNote(NoteRepository $note): void
    {
        
    }
}
