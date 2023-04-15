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
    #[Route('/note/{id}', name: 'app_show_note', methods: ['GET', 'POST'])]
    public function show($id, NoteRepository $oneNote): Response
    {
        // Affiche la note demandée dans le template dédié
        return $this->render('note/single.html.twig', [
            // Récupère la note demandée par son id
            'oneNote' => $oneNote->findOneBy(
                ['id' => $id]
            )
        ]);
    }

    // Route qui permet de créer une nouvelle note
    #[Route('note/new', name: 'app_new_note', methods: ['GET', 'POST'])]
    public function newNote(): Response
    {
        // Création d'une nouvelle note
        $newNote = new Note();

        // Création du formulaire
        $form = $this->createForm(NoteType::class, $newNote);

        return $this->render('note/new.html.twig', [
            'form' => $form
        ]);

    }
}
