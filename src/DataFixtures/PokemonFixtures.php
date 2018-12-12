<?php

namespace App\DataFixtures;

use App\Entity\Pokemon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class PokemonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $charizard = new Pokemon();
        $charizard
            ->setName("Charizard")
            ->setAttack(109)
            ->setLife(78)
            ->setDefense(81)
            ->setSpeed(100)
            ->setImage("assets/images/Charizard.png")
            ->setIcone("assets/icones/Charizard_icon.png")
            ->setType("Fire")
            ->setNumberPokedex(6);
        $manager->persist($charizard);

        $blastoise = new Pokemon();
        $blastoise
            ->setName("Blastoise")
            ->setAttack(85)
            ->setLife(79)
            ->setDefense(105)
            ->setSpeed(78)
            ->setImage("assets/images/Blastoise.png")
            ->setIcone("assets/icones/Blastoise_icon.png")
            ->setType("Water")
            ->setNumberPokedex(9);
        $manager->persist($blastoise);


        $venusaur = new Pokemon();
        $venusaur
            ->setName("Venusaur")
            ->setAttack(100)
            ->setLife(80)
            ->setDefense(91)
            ->setSpeed(80)
            ->setImage("assets/images/Venusaur.png")
            ->setIcone("assets/icones/Venusaur_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(3);
        $manager->persist($venusaur);

        $manager->flush();
    }
}
