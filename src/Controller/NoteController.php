<?php

namespace App\Controller;

use App\Repository\NoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoteController extends AbstractController
{
    // Route principale qui affiche toutes les notes
    #[Route('/note', name: 'app_note')]
    public function index(NoteRepository $note): Response
    {
        return $this->render('note/note.html.twig', [
            'controller_name' => 'NoteController',
            // Affiche toutes les notes par ordre décroissant de l'id
            'note' => $note->findBy(
                [],
                ['id' => 'DESC']
            )
        ]);
    }

    #[Route('/note/{id}', name: 'app_one_note', methods: ['GET'])]
    public function getOneNote($id, NoteRepository $oneNote): Response
    {
        // Récupère la note demandée par son id
        $oneNote = $oneNote->find($id);
        
        // Affiche la note demandée dans le template dédié
        return $this->render('note/one-note.html.twig', [
            'oneNote' => $oneNote,
            // 'note' => $oneNote->findAll()
        ]);
    }
}
