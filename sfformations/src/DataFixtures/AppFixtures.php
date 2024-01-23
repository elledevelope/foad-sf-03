<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Formation;
use App\Entity\Formations;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($j = 0; $j <= 5; $j++) :
            $category = new Category();
            $category->setTitre($faker->randomElement(['infomatique', 'bureautique', 'securité', 'anglais', 'management']));
            $manager->persist($category);
        endfor;

        for ($i = 0; $i <= 10; $i++) :
            $formation = new Formations();

            $formation->setTitre($faker->words(3, true))
                ->setResume($faker->sentence())
                ->setDescription($faker->paragraph())
                ->setDuree($faker->numberBetween(0, 365))
                ->setNiveau($faker->randomElement(['debutant', 'intermidiare', 'expert']))
                ->setLieu($faker->randomElement(['presentiel', 'distanciel']));

            // Get a random category and set it for the formation
            $category = $manager->getRepository(Category::class)->find($faker->numberBetween(1, 6));
            $formation->setCategory($category);

            // $manager->persist($formation);
        endfor;

        // $manager->flush();
    }
}
