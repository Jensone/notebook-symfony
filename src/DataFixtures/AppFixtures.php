<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Note;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Length;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Ajoute des notes à la base de données
        for ($i=0; $i < 50 ; $i++) {
            $note = new Note();
            $note->setTitle('My note number ' . $i)
            ->setContent('This is my first note')
            ->setCreatedAt(new \DateTimeImmutable('now'))
            ->setUpdatedAt(new \DateTimeImmutable('now'))
            ->setAuthor('Jensone');
            
            $manager->persist($note);
        }


        // Ajoute des catégories à la base de données
        $categories = [
            'PHP', 'Symfony', 'Doctrine', 'Twig', 'MySQL', 'JavaScript', 'React', 'Vue', 'Angular', 'NodeJS'
        ];
        $colors = [
            'red', 'blue', 'green', 'yellow', 'orange', 'purple', 'pink', 'brown', 'black', 'white', 'grey', 'cyan', 'magenta', 'lime', 'olive', 'teal', 'navy', 'maroon', 'aqua', 'fuchsia'
        ];
        
        // Boucle sur les catégories
        for ($i=0; $i < count($categories); $i++) { 
            $category = new Category();
            $category->setTitle($categories[$i])
            ->setColor($colors[array_rand($colors)]);
            
            $manager->persist($category);
        }

       
        // Nettoie le flux de données
        $manager->flush();
    }
}
