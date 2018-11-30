<?php

namespace App\DataFixtures;

use App\Entity\Pokemon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $charizard = new Pokemon();
        $charizard
            ->setName("Charizard")
            ->setAttack(80)
            ->setLife(120)
            ->setDefense(60)
            ->setSpeed(50)
            ->setImage("https://archives.bulbagarden.net/media/upload/7/7e/006Charizard.png")
            ->setType("Fire");
        $manager->persist($charizard);

        $blastoise = new Pokemon();
        $blastoise
            ->setName("Blastoise")
            ->setAttack(60)
            ->setLife(120)
            ->setDefense(80)
            ->setSpeed(35)
            ->setImage("https://archives.bulbagarden.net/media/upload/0/02/009Blastoise.png")
            ->setType("Water");
        $manager->persist($blastoise);

        $venusaur = new Pokemon();
        $venusaur
            ->setName("Venusaur")
            ->setAttack(55)
            ->setLife(130)
            ->setDefense(70)
            ->setSpeed(40)
            ->setImage("https://archives.bulbagarden.net/media/upload/a/ae/003Venusaur.png")
            ->setType("Grass");
        $manager->persist($venusaur);

        $manager->flush();
    }
}
