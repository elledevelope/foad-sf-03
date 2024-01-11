<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use App\Entity\Formations;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $formation = new Formations();

    for ($i = 0; $i < 30; $i++) : 
        // $formation->setTitre('Un formation truc muche'); 
        // $formation->setDescription('Une description de la formation truc muche');
        // $formation->setDuree(3); 
        // $formation->setNiveau('Expert');
        // $formation->setLieu('presentiel');
        // $manager->persist($formation);

        $formation->setTitre($faker->sentence()); 
        $formation->setDescription($faker->paragraph()); 
        $formation->setDuree($faker->numberBetween(0, 365)); 
        $formation->setNiveau('Expert');
        $formation->setLieu('presentiel');
        $manager->persist($formation);
    endfor;

        $manager->flush();
    }
}