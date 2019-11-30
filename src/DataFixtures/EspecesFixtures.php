<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Especes;
use App\Entity\Category;
use App\Entity\Comment;

class EspecesFixtures extends Fixture
{
  public function load(ObjectManager $manager)
  {
      $faker = \Faker\Factory::create('fr_FR');

      // tableau de categorie
      $categories = array("Mer", "Eau douce");

      // boucle principale sur les categories
      foreach ($categories as $value) {
        $category = new Category();
        $category->setNom($value);
        $manager->persist($category);

        // Création de 5 especes pour chaque categorie
        for ($i=1; $i <=5 ; $i++)
        {
          $espece = new Especes();
          $contenu = join($faker->paragraphs(3),'</p><p>');
          $espece->setNom($faker->word())
          ->setTailleMin($faker->numberBetween($min = 0, $max = 70))
          ->setContenu($contenu)
          ->setImage($faker->imageUrl($width = 350, $height = 150, 'animals'))
          ->setCreatedAt($faker->dateTimeBetween('-6 months'))
          ->setCategory($category);
          $manager->persist($espece);

          // Création de 3 commentaires pour chaque especes
          for ($j=1; $j <= 3 ; $j++)
          {
            $comment = new Comment();
            $comment->setAuthor($faker->name())
                    ->setCreateAt($faker->dateTimeBetween('-6 months'))
                    ->setContent($faker->paragraph($nbSentences = 3, $variableNbSentences = true))
                    ->setEspece($espece);
            $manager->persist($comment);
          }
        }
      }

      $manager->flush();
  }
}
