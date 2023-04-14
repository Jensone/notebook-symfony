<?php

namespace App\Controller;

use App\Repository\NoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    // Route secondaire qui affiche une seule note
    #[Route('/note/test', name: 'app_one_note', methods: ['GET', 'POST'])]
    public function getOneNote(
        NoteRepository $note,
        Request $request
        ): Response
    {
        return $this->render('note/one-note.html.twig', [
            'controller_name' => 'NoteController',
            'request' => $request->request->get('id'),
            
            // Affiche la note demandée
            'oneNote' => $note->findBy(
                ['id' => strval($request)]
                )
            ]);

    }
}
