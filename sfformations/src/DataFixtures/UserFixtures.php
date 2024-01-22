<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture

{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
    for ($i = 0; $i <= 10; $i++) : 

        //dump($faker->e164PhoneNumber());
        
        $user = new User();
        $user->setNom($faker->lastName()); 
        $user->setPrenom($faker->firstName()); 
        $user->setEmail($faker->email()); 
        $user->setPassword($faker->password()); 
        $user->setAge($faker->numberBetween(18, 99)); 
        $user->setTelephone($faker->e164PhoneNumber());
        $user->setAdresse($faker->address()); 
        $user->setRoles($faker->randomElement([['ROLE_USER'],['ROLE_ADMIN']]));
        $manager->persist($user);
    endfor;

        $manager->flush();
    }
}