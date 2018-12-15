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
            ->setImage("../assets/images/Charizard.png")
            ->setIcon("assets/icones/Charizard_icon.png")
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
            ->setImage("../assets/images/Blastoise.png")
            ->setIcon("assets/icones/Blastoise_icon.png")
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
            ->setImage("../assets/images/Venusaur.png")
            ->setIcon("assets/icones/Venusaur_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(3);
        $manager->persist($venusaur);


        $abra = new Pokemon();
        $abra
            ->setName("Abra")
            ->setAttack(105)
            ->setLife(25)
            ->setDefense(35)
            ->setSpeed(90)
            ->setImage("../assets/images/Abra.png")
            ->setIcon("assets/icones/Abra_icon.png")
            ->setType("Psychic")
            ->setNumberPokedex(63);
        $manager->persist($abra);


        $kadabra = new Pokemon();
        $kadabra
            ->setName("Kadabra")
            ->setAttack(120)
            ->setLife(40)
            ->setDefense(50)
            ->setSpeed(105)
            ->setImage("../assets/images/Kadabra.png")
            ->setIcon("assets/icones/Kadabra_icon.png")
            ->setType("Psychic")
            ->setNumberPokedex(64);
        $manager->persist($kadabra);


        $alakazam = new Pokemon();
        $alakazam
            ->setName("Alakazam")
            ->setAttack(135)
            ->setLife(55)
            ->setDefense(70)
            ->setSpeed(120)
            ->setImage("../assets/images/Alakazam.png")
            ->setIcon("assets/icones/Alakazam_icon.png")
            ->setType("Psychic")
            ->setNumberPokedex(65);
        $manager->persist($alakazam);


        $aerodactyl = new Pokemon();
        $aerodactyl
            ->setName("Aerodactyl")
            ->setAttack(105)
            ->setLife(80)
            ->setDefense(70)
            ->setSpeed(130)
            ->setImage("../assets/images/Aerodactyl.png")
            ->setIcon("assets/icones/Aerodactyl_icon.png")
            ->setType("Rock")
            ->setNumberPokedex(142);
        $manager->persist($aerodactyl);


        $ekans = new Pokemon();
        $ekans
            ->setName("Ekans")
            ->setAttack(60)
            ->setLife(35)
            ->setDefense(49)
            ->setSpeed(55)
            ->setImage("../assets/images/Ekans.png")
            ->setIcon("assets/icones/Ekans_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(23);
        $manager->persist($ekans);


        $arbok = new Pokemon();
        $arbok
            ->setName("Arbok")
            ->setAttack(95)
            ->setLife(60)
            ->setDefense(74)
            ->setSpeed(80)
            ->setImage("../assets/images/Arbok.png")
            ->setIcon("assets/icones/Arbok_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(24);
        $manager->persist($arbok);


        $growlithe = new Pokemon();
        $growlithe
            ->setName("Growlithe")
            ->setAttack(70)
            ->setLife(55)
            ->setDefense(47)
            ->setSpeed(60)
            ->setImage("../assets/images/Growlithe.png")
            ->setIcon("assets/icones/Growlithe_icon.png")
            ->setType("Fire")
            ->setNumberPokedex(58);
        $manager->persist($growlithe);


        $arcanine = new Pokemon();
        $arcanine
            ->setName("Arcanine")
            ->setAttack(110)
            ->setLife(90)
            ->setDefense(80)
            ->setSpeed(95)
            ->setImage("../assets/images/Arcanine.png")
            ->setIcon("assets/icones/Arcanine_icon.png")
            ->setType("Fire")
            ->setNumberPokedex(59);
        $manager->persist($arcanine);


        $moltres = new Pokemon();
        $moltres
            ->setName("Moltres")
            ->setAttack(125)
            ->setLife(90)
            ->setDefense(87)
            ->setSpeed(90)
            ->setImage("../assets/images/Moltres.png")
            ->setIcon("assets/icones/Moltres_icon.png")
            ->setType("Fire")
            ->setNumberPokedex(146);
        $manager->persist($moltres);


        $articuno = new Pokemon();
        $articuno
            ->setName("Articuno")
            ->setAttack(95)
            ->setLife(90)
            ->setDefense(112)
            ->setSpeed(85)
            ->setImage("../assets/images/Articuno.png")
            ->setIcon("assets/icones/Articuno_icon.png")
            ->setType("Ice")
            ->setNumberPokedex(144);
        $manager->persist($articuno);


        $weedle = new Pokemon();
        $weedle
            ->setName("Weedle")
            ->setAttack(35)
            ->setLife(40)
            ->setDefense(25)
            ->setSpeed(50)
            ->setImage("../assets/images/Weedle.png")
            ->setIcon("assets/icones/Weedle_icon.png")
            ->setType("Bug")
            ->setNumberPokedex(13);
        $manager->persist($weedle);


        $kakuna = new Pokemon();
        $kakuna
            ->setName("Kakuna")
            ->setAttack(25)
            ->setLife(45)
            ->setDefense(37)
            ->setSpeed(35)
            ->setImage("../assets/images/Kakuna.png")
            ->setIcon("assets/icones/Kakuna_icon.png")
            ->setType("Bug")
            ->setNumberPokedex(14);
        $manager->persist($kakuna);


        $beedrill = new Pokemon();
        $beedrill
            ->setName("Beedrill")
            ->setAttack(90)
            ->setLife(65)
            ->setDefense(60)
            ->setSpeed(75)
            ->setImage("../assets/images/Weedle.png")
            ->setIcon("assets/icones/Weedle_icon.png")
            ->setType("Bug")
            ->setNumberPokedex(15);
        $manager->persist($beedrill);


        $bellsprout = new Pokemon();
        $bellsprout
            ->setName("Bellsprout")
            ->setAttack(75)
            ->setLife(50)
            ->setDefense(32)
            ->setSpeed(40)
            ->setImage("../assets/images/Bellsprout.png")
            ->setIcon("assets/icones/Bellsprout_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(69);
        $manager->persist($bellsprout);


        $weepinbell = new Pokemon();
        $weepinbell
            ->setName("Weepinbell")
            ->setAttack(90)
            ->setLife(65)
            ->setDefense(47)
            ->setSpeed(55)
            ->setImage("../assets/images/Weepinbell.png")
            ->setIcon("assets/icones/Weepinbell_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(70);
        $manager->persist($weepinbell);


        $victreebel = new Pokemon();
        $victreebel
            ->setName("Victreebel")
            ->setAttack(105)
            ->setLife(80)
            ->setDefense(67)
            ->setSpeed(70)
            ->setImage("../assets/images/Victreebel.png")
            ->setIcon("assets/icones/Victreebel_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(71);
        $manager->persist($victreebel);


        $squirtle = new Pokemon();
        $squirtle
            ->setName("Squirtle")
            ->setAttack(50)
            ->setLife(44)
            ->setDefense(64)
            ->setSpeed(43)
            ->setImage("../assets/images/Squirtle.png")
            ->setIcon("assets/icones/Squirtle_icon.png")
            ->setType("Eau")
            ->setNumberPokedex(7);
        $manager->persist($squirtle);


        $wartortle = new Pokemon();
        $wartortle
            ->setName("Wartortle")
            ->setAttack(65)
            ->setLife(59)
            ->setDefense(80)
            ->setSpeed(58)
            ->setImage("../assets/images/Wartortle.png")
            ->setIcon("assets/icones/Wartortle_icon.png")
            ->setType("Water")
            ->setNumberPokedex(8);
        $manager->persist($wartortle);


        $bulbasaur = new Pokemon();
        $bulbasaur
            ->setName("Bulbasaur")
            ->setAttack(65)
            ->setLife(45)
            ->setDefense(57)
            ->setSpeed(45)
            ->setImage("../../assets/images/Bulbasaur.png")
            ->setIcon("assets/icones/Bulbasaur_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(1);
        $manager->persist($bulbasaur);


        $ivysaur = new Pokemon();
        $ivysaur
            ->setName("Ivysaur")
            ->setAttack(80)
            ->setLife(60)
            ->setDefense(71)
            ->setSpeed(60)
            ->setImage("../assets/images/Ivysaur.png")
            ->setIcon("assets/icones/Ivysaur_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(2);
        $manager->persist($ivysaur);


        $caterpie = new Pokemon();
        $caterpie
            ->setName("Caterpie")
            ->setAttack(30)
            ->setLife(45)
            ->setDefense(27)
            ->setSpeed(45)
            ->setImage("../assets/images/Caterpie.png")
            ->setIcon("assets/icones/Caterpie_icon.png")
            ->setType("Bug")
            ->setNumberPokedex(10);
        $manager->persist($caterpie);


        $metapod = new Pokemon();
        $metapod
            ->setName("Metapod")
            ->setAttack(25)
            ->setLife(50)
            ->setDefense(40)
            ->setSpeed(30)
            ->setImage("../assets/images/Metapod.png")
            ->setIcon("assets/icones/Metapod_icon.png")
            ->setType("Bug")
            ->setNumberPokedex(11);
        $manager->persist($metapod);


        $butterfree = new Pokemon();
        $butterfree
            ->setName("Butterfree")
            ->setAttack(90)
            ->setLife(60)
            ->setDefense(65)
            ->setSpeed(70)
            ->setImage("../assets/images/Butterfree.png")
            ->setIcon("assets/icones/Butterfree_icon.png")
            ->setType("Bug")
            ->setNumberPokedex(12);
        $manager->persist($butterfree);


        $charmender = new Pokemon();
        $charmender
            ->setName("Charmander")
            ->setAttack(60)
            ->setLife(39)
            ->setDefense(46)
            ->setSpeed(65)
            ->setImage("../assets/images/Charmander.png")
            ->setIcon("assets/icones/Charmander_icon.png")
            ->setType("Fire")
            ->setNumberPokedex(4);
        $manager->persist($charmender);


        $charmeleon = new Pokemon();
        $charmeleon
            ->setName("Charmeleon")
            ->setAttack(80)
            ->setLife(58)
            ->setDefense(61)
            ->setSpeed(80)
            ->setImage("../assets/images/Charmeleon.png")
            ->setIcon("assets/icones/Charmeleon_icon.png")
            ->setType("Fire")
            ->setNumberPokedex(5);
        $manager->persist($charmeleon);


        $mewtwo = new Pokemon();
        $mewtwo
            ->setName("Mewtwo")
            ->setAttack(154)
            ->setLife(106)
            ->setDefense(90)
            ->setSpeed(130)
            ->setImage("../assets/images/Mewtwo.png")
            ->setIcon("assets/icones/Mewtwo_icon.png")
            ->setType("Psychic")
            ->setNumberPokedex(150);
        $manager->persist($mewtwo);


        $manager->flush();
    }
}
