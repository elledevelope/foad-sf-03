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
        $formation->setTitre('Un formation truc muche'); // $faker->sentence();
        $formation->setDescription('Une description de la formation truc muche'); // $faker->paragraph();
        $formation->setDuree(3); //$faker->numberBetween(0, 365);
        $formation->setNiveau('Expert');
        $formation->setLieu('presentiel');
        $manager->persist($formation);
    endfor;

        $manager->flush();
    }
}