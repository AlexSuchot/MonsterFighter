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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])
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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setStage(["Charmander", "Charmeleon", "Charizard"])

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
            ->setImage("../assets/images/Bulbasaur.png")
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


        $cloyster = new Pokemon();
        $cloyster
            ->setName("Cloyster")
            ->setAttack(95)
            ->setLife(50)
            ->setDefense(92)
            ->setSpeed(70)
            ->setImage("../assets/images/Cloyster.png")
            ->setIcon("assets/icones/Cloyster_icon.png")
            ->setType("Water")
            ->setNumberPokedex(91);
        $manager->persist($cloyster);


        $dewgong = new Pokemon();
        $dewgong
            ->setName("Dewgong")
            ->setAttack(70)
            ->setLife(90)
            ->setDefense(87)
            ->setSpeed(70)
            ->setImage("../assets/images/Dewgong.png")
            ->setIcon("assets/icones/Dewgong_icon.png")
            ->setType("Water")
            ->setNumberPokedex(87);
        $manager->persist($dewgong);


        $dragonair = new Pokemon();
        $dragonair
            ->setName("Dragonair")
            ->setAttack(84)
            ->setLife(61)
            ->setDefense(67)
            ->setSpeed(70)
            ->setImage("../assets/images/Dragonair.png")
            ->setIcon("assets/icones/Dragonair_icon.png")
            ->setType("Dragon")
            ->setNumberPokedex(148);
        $manager->persist($dragonair);


        $dragonite = new Pokemon();
        $dragonite
            ->setName("Dragonite")
            ->setAttack(134)
            ->setLife(91)
            ->setDefense(97)
            ->setSpeed(80)
            ->setImage("../assets/images/Dragonite.png")
            ->setIcon("assets/icones/Dragonite_icon.png")
            ->setType("Dragon")
            ->setNumberPokedex(149);
        $manager->persist($dragonite);


        $dratini = new Pokemon();
        $dratini
            ->setName("Dratini")
            ->setAttack(64)
            ->setLife(41)
            ->setDefense(47)
            ->setSpeed(50)
            ->setImage("../assets/images/Dratini.png")
            ->setIcon("assets/icones/Dratini_icon.png")
            ->setType("Dragon")
            ->setNumberPokedex(147);
        $manager->persist($dratini);


        $drowzee = new Pokemon();
        $drowzee
            ->setName("Drowzee")
            ->setAttack(48)
            ->setLife(60)
            ->setDefense(67)
            ->setSpeed(42)
            ->setImage("../assets/images/Drowzee.png")
            ->setIcon("assets/icones/Drowzee_icon.png")
            ->setType("Psychic")
            ->setNumberPokedex(96);
        $manager->persist($drowzee);


        $exeggcute = new Pokemon();
        $exeggcute
            ->setName("Exeggcute")
            ->setAttack(60)
            ->setLife(60)
            ->setDefense(62)
            ->setSpeed(40)
            ->setImage("../assets/images/Exeggcute.png")
            ->setIcon("assets/icones/Exeggcute_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(102);
        $manager->persist($exeggcute);


        $exeggutor = new Pokemon();
        $exeggutor
            ->setName("Exeggutor")
            ->setAttack(125)
            ->setLife(95)
            ->setDefense(80)
            ->setSpeed(55)
            ->setImage("../assets/images/Exeggutor.png")
            ->setIcon("assets/icones/Exeggutor_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(103);
        $manager->persist($exeggutor);


        $flareon = new Pokemon();
        $flareon
            ->setName("Flareon")
            ->setAttack(130)
            ->setLife(65)
            ->setDefense(85)
            ->setSpeed(65)
            ->setImage("../assets/images/Flareon.png")
            ->setIcon("assets/icones/Flareon_icon.png")
            ->setType("Fire")
            ->setNumberPokedex(136);
        $manager->persist($flareon);


        $geodude = new Pokemon();
        $geodude
            ->setName("Geodude")
            ->setAttack(80)
            ->setLife(40)
            ->setDefense(65)
            ->setSpeed(20)
            ->setImage("../assets/images/Geodude.png")
            ->setIcon("assets/icones/Geodude_icon.png")
            ->setType("Rock")
            ->setNumberPokedex(74);
        $manager->persist($geodude);


        $gloom = new Pokemon();
        $gloom
            ->setName("Gloom")
            ->setAttack(85)
            ->setLife(60)
            ->setDefense(72)
            ->setSpeed(40)
            ->setImage("../assets/images/Gloom.png")
            ->setIcon("assets/icones/Gloom_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(44);
        $manager->persist($gloom);


        $golbat = new Pokemon();
        $golbat
            ->setName("Golbat")
            ->setAttack(80)
            ->setLife(75)
            ->setDefense(72)
            ->setSpeed(90)
            ->setImage("../assets/images/Golbat.png")
            ->setIcon("assets/icones/Golbat_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(74);
        $manager->persist($golbat);


        $goldeen = new Pokemon();
        $goldeen
            ->setName("Goldeen")
            ->setAttack(67)
            ->setLife(45)
            ->setDefense(55)
            ->setSpeed(63)
            ->setImage("../assets/images/Goldeen.png")
            ->setIcon("assets/icones/Goldeen_icon.png")
            ->setType("Water")
            ->setNumberPokedex(118);
        $manager->persist($goldeen);


        $golduck = new Pokemon();
        $golduck
            ->setName("Golduck")
            ->setAttack(95)
            ->setLife(80)
            ->setDefense(79)
            ->setSpeed(85)
            ->setImage("../assets/images/Golduck.png")
            ->setIcon("assets/icones/Golduck_icon.png")
            ->setType("Water")
            ->setNumberPokedex(55);
        $manager->persist($golduck);


        $golem = new Pokemon();
        $golem
            ->setName("Golem")
            ->setAttack(120)
            ->setLife(80)
            ->setDefense(102)
            ->setSpeed(45)
            ->setImage("../assets/images/Golem.png")
            ->setIcon("assets/icones/Golem_icon.png")
            ->setType("Rock")
            ->setNumberPokedex(76);
        $manager->persist($golem);


        $graveler = new Pokemon();
        $graveler
            ->setName("Graveler")
            ->setAttack(95)
            ->setLife(55)
            ->setDefense(80)
            ->setSpeed(35)
            ->setImage("../assets/images/Graveler.png")
            ->setIcon("assets/icones/Graveler_icon.png")
            ->setType("Rock")
            ->setNumberPokedex(75);
        $manager->persist($graveler);


        $grimer = new Pokemon();
        $grimer
            ->setName("Grimer")
            ->setAttack(80)
            ->setLife(80)
            ->setDefense(50)
            ->setSpeed(25)
            ->setImage("../assets/images/Grimer.png")
            ->setIcon("assets/icones/Grimer_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(88);
        $manager->persist($grimer);


        $gyarados = new Pokemon();
        $gyarados
            ->setName("Gyarados")
            ->setAttack(125)
            ->setLife(95)
            ->setDefense(89)
            ->setSpeed(81)
            ->setImage("../assets/images/Gyarados.png")
            ->setIcon("assets/icones/Gyarados_icon.png")
            ->setType("Water")
            ->setNumberPokedex(130);
        $manager->persist($gyarados);


        $horsea = new Pokemon();
        $horsea
            ->setName("Horsea")
            ->setAttack(70)
            ->setLife(30)
            ->setDefense(47)
            ->setSpeed(60)
            ->setImage("../assets/images/Horsea.png")
            ->setIcon("assets/icones/Horsea_icon.png")
            ->setType("Water")
            ->setNumberPokedex(116);
        $manager->persist($horsea);


        $hypno = new Pokemon();
        $hypno
            ->setName("Hypno")
            ->setAttack(73)
            ->setLife(85)
            ->setDefense(92)
            ->setSpeed(67)
            ->setImage("../assets/images/Hypno.png")
            ->setIcon("assets/icones/Hypno_icon.png")
            ->setType("Psychic")
            ->setNumberPokedex(97);
        $manager->persist($hypno);


        $jynx = new Pokemon();
        $jynx
            ->setName("Jynx")
            ->setAttack(115)
            ->setLife(65)
            ->setDefense(65)
            ->setSpeed(95)
            ->setImage("../assets/images/Jynx.png")
            ->setIcon("assets/icones/Jynx_icon.png")
            ->setType("Ice")
            ->setNumberPokedex(124);
        $manager->persist($jynx);


        $kabuto = new Pokemon();
        $kabuto
            ->setName("Kabuto")
            ->setAttack(80)
            ->setLife(30)
            ->setDefense(67)
            ->setSpeed(55)
            ->setImage("../assets/images/Kabuto.png")
            ->setIcon("assets/icones/Kabuto_icon.png")
            ->setType("Rock")
            ->setNumberPokedex(140);
        $manager->persist($kabuto);


        $kabutops = new Pokemon();
        $kabutops
            ->setName("Kabutops")
            ->setAttack(115)
            ->setLife(60)
            ->setDefense(87)
            ->setSpeed(80)
            ->setImage("../assets/images/Kabutops.png")
            ->setIcon("assets/icones/Kabutops_icon.png")
            ->setType("Rock")
            ->setNumberPokedex(141);
        $manager->persist($kabutops);


        $kingler = new Pokemon();
        $kingler
            ->setName("Kingler")
            ->setAttack(130)
            ->setLife(55)
            ->setDefense(82)
            ->setSpeed(75)
            ->setImage("../assets/images/Kingler.png")
            ->setIcon("assets/icones/Kingler_icon.png")
            ->setType("Water")
            ->setNumberPokedex(99);
        $manager->persist($kingler);


        $koffing = new Pokemon();
        $koffing
            ->setName("Koffing")
            ->setAttack(65)
            ->setLife(40)
            ->setDefense(70)
            ->setSpeed(35)
            ->setImage("../assets/images/Koffing.png")
            ->setIcon("assets/icones/Koffing_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(109);
        $manager->persist($koffing);


        $krabby = new Pokemon();
        $krabby
            ->setName("Krabby")
            ->setAttack(105)
            ->setLife(30)
            ->setDefense(57)
            ->setSpeed(50)
            ->setImage("../assets/images/Krabby.png")
            ->setIcon("assets/icones/Krabby_icon.png")
            ->setType("Water")
            ->setNumberPokedex(98);
        $manager->persist($krabby);


        $lapras = new Pokemon();
        $lapras
            ->setName("Lapras")
            ->setAttack(85)
            ->setLife(130)
            ->setDefense(87)
            ->setSpeed(60)
            ->setImage("../assets/images/Lapras.png")
            ->setIcon("assets/icones/Lapras_icon.png")
            ->setType("Water")
            ->setNumberPokedex(131);
        $manager->persist($lapras);


        $magikarp = new Pokemon();
        $magikarp
            ->setName("Magikarp")
            ->setAttack(15)
            ->setLife(20)
            ->setDefense(37)
            ->setSpeed(80)
            ->setImage("../assets/images/Magikarp.png")
            ->setIcon("assets/icones/Magikarp_icon.png")
            ->setType("Water")
            ->setNumberPokedex(129);
        $manager->persist($magikarp);


        $magmar = new Pokemon();
        $magmar
            ->setName("Magmar")
            ->setAttack(100)
            ->setLife(65)
            ->setDefense(71)
            ->setSpeed(93)
            ->setImage("../assets/images/Magmar.png")
            ->setIcon("assets/icones/Magmar_icon.png")
            ->setType("Fire")
            ->setNumberPokedex(126);
        $manager->persist($magmar);


        $mew = new Pokemon();
        $mew
            ->setName("Mew")
            ->setAttack(100)
            ->setLife(100)
            ->setDefense(100)
            ->setSpeed(100)
            ->setImage("../assets/images/Mew.png")
            ->setIcon("assets/icones/Mew_icon.png")
            ->setType("Psychic")
            ->setNumberPokedex(151);
        $manager->persist($mew);


        $mrmime = new Pokemon();
        $mrmime
            ->setName("Mr. Mime")
            ->setAttack(100)
            ->setLife(40)
            ->setDefense(92)
            ->setSpeed(90)
            ->setImage("../assets/images/Mr._Mime.png")
            ->setIcon("assets/icones/Mr._Mime_icon.png")
            ->setType("Psychic")
            ->setNumberPokedex(122);
        $manager->persist($mrmime);


        $muk = new Pokemon();
        $muk
            ->setName("Muk")
            ->setAttack(105)
            ->setLife(105)
            ->setDefense(92)
            ->setSpeed(50)
            ->setImage("../assets/images/Muk.png")
            ->setIcon("assets/icones/Muk_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(89);
        $manager->persist($muk);


        $nidoking = new Pokemon();
        $nidoking
            ->setName("Nidoking")
            ->setAttack(102)
            ->setLife(81)
            ->setDefense(76)
            ->setSpeed(85)
            ->setImage("../assets/images/Nidoking.png")
            ->setIcon("assets/icones/Kindoking_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(34);
        $manager->persist($nidoking);


        $nidoqueen = new Pokemon();
        $nidoqueen
            ->setName("Nidoqueen")
            ->setAttack(92)
            ->setLife(90)
            ->setDefense(86)
            ->setSpeed(76)
            ->setImage("../assets/images/Nidoqueen.png")
            ->setIcon("assets/icones/Nidoqueen_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(31);
        $manager->persist($nidoqueen);


        $nidoranm = new Pokemon();
        $nidoranm
            ->setName("Nidoran-M")
            ->setAttack(57)
            ->setLife(46)
            ->setDefense(40)
            ->setSpeed(50)
            ->setImage("../assets/images/Nidoran_m.png")
            ->setIcon("assets/icones/Nidoran_m_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(32);
        $manager->persist($nidoranm);


        $nidoranf = new Pokemon();
        $nidoranf
            ->setName("Nidoran-F")
            ->setAttack(47)
            ->setLife(55)
            ->setDefense(46)
            ->setSpeed(41)
            ->setImage("../assets/images/Nidoran_f.png")
            ->setIcon("assets/icones/Nidoran_f_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(29);
        $manager->persist($nidoranf);


        $nidorina = new Pokemon();
        $nidorina
            ->setName("Nidorina")
            ->setAttack(62)
            ->setLife(70)
            ->setDefense(61)
            ->setSpeed(56)
            ->setImage("../assets/images/Nidorina.png")
            ->setIcon("assets/icones/Nidorina_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(30);
        $manager->persist($nidorina);


        $nidorino = new Pokemon();
        $nidorino
            ->setName("Nidorino")
            ->setAttack(72)
            ->setLife(61)
            ->setDefense(56)
            ->setSpeed(65)
            ->setImage("../assets/images/Nidorino.png")
            ->setIcon("assets/icones/Nidorino_icon.png")
            ->setType("Poison")
            ->setNumberPokedex(33);
        $manager->persist($nidorino);


        $ninetales = new Pokemon();
        $ninetales
            ->setName("Ninetales")
            ->setAttack(81)
            ->setLife(73)
            ->setDefense(87)
            ->setSpeed(100)
            ->setImage("../assets/images/Ninetales.png")
            ->setIcon("assets/icones/Ninetales_icon.png")
            ->setType("Fire")
            ->setNumberPokedex(38);
        $manager->persist($ninetales);


        $oddish = new Pokemon();
        $oddish
            ->setName("Oddish")
            ->setAttack(75)
            ->setLife(45)
            ->setDefense(60)
            ->setSpeed(30)
            ->setImage("../assets/images/Oddish.png")
            ->setIcon("assets/icones/Oddish_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(43);
        $manager->persist($oddish);


        $omanyte = new Pokemon();
        $omanyte
            ->setName("Omanyte")
            ->setAttack(90)
            ->setLife(35)
            ->setDefense(77)
            ->setSpeed(35)
            ->setImage("../assets/images/Omanyte.png")
            ->setIcon("assets/icones/Omanyte_icon.png")
            ->setType("Rock")
            ->setNumberPokedex(138);
        $manager->persist($omanyte);


        $omastar = new Pokemon();
        $omastar
            ->setName("Omastar")
            ->setAttack(115)
            ->setLife(70)
            ->setDefense(97)
            ->setSpeed(55)
            ->setImage("../assets/images/Omastar.png")
            ->setIcon("assets/icones/Omastar_icon.png")
            ->setType("Rock")
            ->setNumberPokedex(139);
        $manager->persist($omastar);


        $onix = new Pokemon();
        $onix
            ->setName("Onix")
            ->setAttack(45)
            ->setLife(35)
            ->setDefense(102)
            ->setSpeed(70)
            ->setImage("../assets/images/Onix.png")
            ->setIcon("assets/icones/Onix_icon.png")
            ->setType("Rock")
            ->setNumberPokedex(95);
        $manager->persist($onix);


        $paras = new Pokemon();
        $paras
            ->setName("Paras")
            ->setAttack(70)
            ->setLife(35)
            ->setDefense(55)
            ->setSpeed(25)
            ->setImage("../assets/images/Paras.png")
            ->setIcon("assets/icones/Paras_icon.png")
            ->setType("Bug")
            ->setNumberPokedex(46);
        $manager->persist($paras);


        $parasect = new Pokemon();
        $parasect
            ->setName("Parasect")
            ->setAttack(95)
            ->setLife(60)
            ->setDefense(80)
            ->setSpeed(30)
            ->setImage("../assets/images/Parasect.png")
            ->setIcon("assets/icones/Parasect_icon.png")
            ->setType("Bug")
            ->setNumberPokedex(47);
        $manager->persist($parasect);


        $pinsir = new Pokemon();
        $pinsir
            ->setName("Pinsir")
            ->setAttack(125)
            ->setLife(65)
            ->setDefense(85)
            ->setSpeed(85)
            ->setImage("../assets/images/Pinsir.png")
            ->setIcon("assets/icones/Pinsir_icon.png")
            ->setType("Bug")
            ->setNumberPokedex(127);
        $manager->persist($pinsir);


        $poliwag = new Pokemon();
        $poliwag
            ->setName("Poliwag")
            ->setAttack(50)
            ->setLife(40)
            ->setDefense(40)
            ->setSpeed(90)
            ->setImage("../assets/images/Poliwag.png")
            ->setIcon("assets/icones/Poliwag_icon.png")
            ->setType("Water")
            ->setNumberPokedex(60);
        $manager->persist($poliwag);


        $poliwhirl = new Pokemon();
        $poliwhirl
            ->setName("Poliwhirl")
            ->setAttack(65)
            ->setLife(65)
            ->setDefense(57)
            ->setSpeed(90)
            ->setImage("../assets/images/Poliwhirl.png")
            ->setIcon("assets/icones/Poliwhirl_icon.png")
            ->setType("Water")
            ->setNumberPokedex(61);
        $manager->persist($poliwhirl);


        $poliwrath = new Pokemon();
        $poliwrath
            ->setName("Poliwrath")
            ->setAttack(95)
            ->setLife(90)
            ->setDefense(92)
            ->setSpeed(70)
            ->setImage("../assets/images/Poliwrath.png")
            ->setIcon("assets/icones/Poliwrath_icon.png")
            ->setType("Water")
            ->setNumberPokedex(62);
        $manager->persist($poliwrath);


        $ponyta = new Pokemon();
        $ponyta
            ->setName("Ponyta")
            ->setAttack(85)
            ->setLife(50)
            ->setDefense(60)
            ->setSpeed(90)
            ->setImage("../assets/images/Ponyta.png")
            ->setIcon("assets/icones/Ponyta_icon.png")
            ->setType("Fire")
            ->setNumberPokedex(77);
        $manager->persist($ponyta);


        $psyduck = new Pokemon();
        $psyduck
            ->setName("Psyduck")
            ->setAttack(65)
            ->setLife(50)
            ->setDefense(49)
            ->setSpeed(55)
            ->setImage("../assets/images/Psyduck.png")
            ->setIcon("assets/icones/Psyduck_icon.png")
            ->setType("Water")
            ->setNumberPokedex(54);
        $manager->persist($psyduck);


        $rapidash = new Pokemon();
        $rapidash
            ->setName("Rapidash")
            ->setAttack(100)
            ->setLife(65)
            ->setDefense(75)
            ->setSpeed(105)
            ->setImage("../assets/images/Rapidash.png")
            ->setIcon("assets/icones/Rapidash_icon.png")
            ->setType("Fire")
            ->setNumberPokedex(78);
        $manager->persist($rapidash);


        $scyther = new Pokemon();
        $scyther
            ->setName("Scyther")
            ->setAttack(110)
            ->setLife(70)
            ->setDefense(80)
            ->setSpeed(105)
            ->setImage("../assets/images/Scyther.png")
            ->setIcon("assets/icones/Scyther_icon.png")
            ->setType("Bug")
            ->setNumberPokedex(123);
        $manager->persist($scyther);


        $seadra = new Pokemon();
        $seadra
            ->setName("Seadra")
            ->setAttack(95)
            ->setLife(55)
            ->setDefense(70)
            ->setSpeed(85)
            ->setImage("../assets/images/Seadra.png")
            ->setIcon("assets/icones/Seadra_icon.png")
            ->setType("Water")
            ->setNumberPokedex(117);
        $manager->persist($seadra);


        $seaking = new Pokemon();
        $seaking
            ->setName("Seaking")
            ->setAttack(92)
            ->setLife(80)
            ->setDefense(72)
            ->setSpeed(68)
            ->setImage("../assets/images/Seaking.png")
            ->setIcon("assets/icones/Seaking_icon.png")
            ->setType("Water")
            ->setNumberPokedex(119);
        $manager->persist($seaking);


        $seel = new Pokemon();
        $seel
            ->setName("Seel")
            ->setAttack(45)
            ->setLife(65)
            ->setDefense(62)
            ->setSpeed(45)
            ->setImage("../assets/images/Seel.png")
            ->setIcon("assets/icones/Seel_icon.png")
            ->setType("Water")
            ->setNumberPokedex(86);
        $manager->persist($seel);


        $shellder = new Pokemon();
        $shellder
            ->setName("Shellder")
            ->setAttack(65)
            ->setLife(30)
            ->setDefense(62)
            ->setSpeed(40)
            ->setImage("../assets/images/Shellder.png")
            ->setIcon("assets/icones/Shellder_icon.png")
            ->setType("Water")
            ->setNumberPokedex(90);
        $manager->persist($shellder);


        $slowbro = new Pokemon();
        $slowbro
            ->setName("Slowbro")
            ->setAttack(100)
            ->setLife(95)
            ->setDefense(95)
            ->setSpeed(30)
            ->setImage("../assets/images/Slowbro.png")
            ->setIcon("assets/icones/Slowbro_icon.png")
            ->setType("Water")
            ->setNumberPokedex(80);
        $manager->persist($slowbro);


        $slowpoke = new Pokemon();
        $slowpoke
            ->setName("Slowpoke")
            ->setAttack(65)
            ->setLife(90)
            ->setDefense(52)
            ->setSpeed(15)
            ->setImage("../assets/images/Slowpoke.png")
            ->setIcon("assets/icones/Slowpoke_icon.png")
            ->setType("Water")
            ->setNumberPokedex(79);
        $manager->persist($slowpoke);


        $starmie = new Pokemon();
        $starmie
            ->setName("Starmie")
            ->setAttack(100)
            ->setLife(60)
            ->setDefense(85)
            ->setSpeed(115)
            ->setImage("../assets/images/Starmie.png")
            ->setIcon("assets/icones/Starmie_icon.png")
            ->setType("Water")
            ->setNumberPokedex(121);
        $manager->persist($starmie);


        $staryu = new Pokemon();
        $staryu
            ->setName("Staryu")
            ->setAttack(70)
            ->setLife(30)
            ->setDefense(50)
            ->setSpeed(85)
            ->setImage("../assets/images/Staryu.png")
            ->setIcon("assets/icones/Staryu_icon.png")
            ->setType("Water")
            ->setNumberPokedex(120);
        $manager->persist($staryu);


        $tangela = new Pokemon();
        $tangela
            ->setName("Tangela")
            ->setAttack(100)
            ->setLife(65)
            ->setDefense(77)
            ->setSpeed(60)
            ->setImage("../assets/images/Tangela.png")
            ->setIcon("assets/icones/Tangela_icon.png")
            ->setType("Grass")
            ->setNumberPokedex(114);
        $manager->persist($tangela);


        $tentacool = new Pokemon();
        $tentacool
            ->setName("Tentacool")
            ->setAttack(50)
            ->setLife(40)
            ->setDefense(67)
            ->setSpeed(70)
            ->setImage("../assets/images/Tentacool.png")
            ->setIcon("assets/icones/Tentacool_icon.png")
            ->setType("Water")
            ->setNumberPokedex(72);
        $manager->persist($tentacool);


        $manager->flush();
    }
}