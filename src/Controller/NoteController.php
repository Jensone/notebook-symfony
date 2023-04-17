<?php

namespace App\Controller;

use App\Entity\Note;
use App\Form\NoteType;
use App\Repository\NoteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    #[Route('/new-note', name: 'new_note', methods: ['GET', 'POST'])]
    public function newNote(Request $request)
    {
        $oneNote = new Note();

        $oneNote = $this->createForm(NoteType::class, $oneNote);

        return $this->render('note/new.html.twig', [
            // Formulaire de création de note
            'form' => $oneNote->createView()

        ]);

    }

    // Route qui permet de modifier une note
    #[Route('update-note/{id}', name: 'update_note', methods: ['GET', 'POST'])]
    public function updateNote(
        $id, 
        NoteRepository $oneNote, 
        Request $request, 
        EntityManagerInterface $em
        ): Response
    {
        $oneNote = $oneNote->findOneBy(['id' => $id]);
        $form = $this->createForm(NoteType::class, $oneNote);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $oneNote->setUpdatedAt(new \DateTimeImmutable('now'));
            $oneNote->setTitle($form->get('title')->getData());
            $oneNote->setAuthor($form->get('author')->getData());
            $oneNote->setDescription($form->get('description')->getData());
            $oneNote->setContent($form->get('content')->getData());

            $em->persist($oneNote);
            $em->flush();

            return $this->redirectToRoute('show_note', [
                'id' => $oneNote->getId()
            ]);
        }

                return $this->render('note/update.html.twig', [
                    'note' => $oneNote,
                    'form' => $form->createView()
                ]);
    }

    // Route qui permet de supprimer une note
    #[Route('delete-note', name: 'delete_note', methods: ['GET', 'POST'])]
    public function deleteNote(NoteRepository $note): void
    {
        
    }
}
