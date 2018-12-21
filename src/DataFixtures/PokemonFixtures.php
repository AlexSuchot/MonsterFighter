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
            ->setNumberPokedex(6)
            ->setDescription("Charizard flies around the sky in search of powerful opponents. It breathes fire of such great heat that it melts anything. However, it never turns its fiery breath on any opponent weaker than itself. ");
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
            ->setStage(["Squirtle", "Wartortle", "Blastoise"])
            ->setDescription("Blastoise has water spouts that protrude from its shell. The water spouts are very accurate. They can shoot bullets of water with enough accuracy to strike empty cans from a distance of over 160 feet.")
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
            ->setStage(["Bulbasaur", "Ivysaur", "Venusaur"])
            ->setDescription("There is a large flower on Venusaur's back. The flower is said to take on vivid colors if it gets plenty of nutrition and sunlight. The flower's aroma soothes the emotions of people. ")
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
            ->setStage(["Abra", "Kadabra", "Alakazam"])
            ->setDescription("Abra sleeps for eighteen hours a day. However, it can sense the presence of foes even while it is sleeping. In such a situation, this Monster immediately teleports to safety. ")
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
            ->setStage(["Abra", "Kadabra", "Alakazam"])
            ->setDescription("Kadabra emits a peculiar alpha wave if it develops a headache. Only those people with a particularly strong psyche can hope to become a Trainer of this Monster. ")
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
            ->setStage(["Abra", "Kadabra", "Alakazam"])
            ->setDescription("Alakazam's brain continually grows, making its head far too heavy to support with its neck. This Pokémon holds its head up using its psychokinetic power instead. ")
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
            ->setStage(["Aerodactyl"])
            ->setDescription("Aerodactyl is a Monster from the age of dinosaurs. It was regenerated from genetic material extracted from amber. It is imagined to have been the king of the skies in ancient times. ")
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
            ->setStage(["Ekans", "Arbok"])
            ->setDescription("Ekans curls itself up in a spiral while it rests. Assuming this position allows it to quickly respond to a threat from any direction with a glare from its upraised head. ")
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
            ->setStage(["Ekans", "Arbok"])
            ->setDescription("This Monster is terrifically strong in order to constrict things with its body. It can even flatten steel oil drums. Once Arbok wraps its body around its foe, escaping its crunching embrace is impossible. ")
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
            ->setStage(["Growlithe", "Arcanine"])
            ->setDescription("Growlithe has a superb sense of smell. Once it smells anything, this Pokémon won't forget the scent, no matter what. It uses its advanced olfactory sense to determine the emotions of other living things. ")
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
            ->setStage(["Growlithe", "Arcanine"])
            ->setDescription("Arcanine is known for its high speed. It is said to be capable of running over 6,200 miles in a single day and night. The fire that blazes wildly within this Pokémon's body is its source of power. ")
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
            ->setStage(["Moltres"])
            ->setDescription("Moltres is a legendary bird Monster that has the ability to control fire. If this Monster is injured, it is said to dip its body in the molten magma of a volcano to burn and heal itself. ")
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
            ->setStage(["Articuno"])
            ->setDescription("Articuno is a legendary bird Monster that can control ice. The flapping of its wings chills the air. As a result, it is said that when this Monster flies, snow will fall. ")
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
            ->setStage(["Weedle", "Kakuna", "Beedrill"])
            ->setDescription("Weedle has an extremely acute sense of smell. It is capable of distinguishing its favorite kinds of leaves from those it dislikes just by sniffing with its big red proboscis (nose). ")
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
            ->setStage(["Weedle", "Kakuna", "Beedrill"])
            ->setDescription("Kakuna remains virtually immobile as it clings to a tree. However, on the inside, it is extremely busy as it prepares for its coming evolution. This is evident from how hot the shell becomes to the touch. ")
            ->setNumberPokedex(14);
        $manager->persist($kakuna);


        $beedrill = new Pokemon();
        $beedrill
            ->setName("Beedrill")
            ->setAttack(90)
            ->setLife(65)
            ->setDefense(60)
            ->setSpeed(75)
            ->setImage("../assets/images/Beedrill.png")
            ->setIcon("assets/icones/Beedrill_icon.png")
            ->setType("Bug")
            ->setStage(["Weedle", "Kakuna", "Beedrill"])
            ->setDescription("Beedrill is extremely territorial. No one should ever approach its nest—this is for their own safety. If angered, they will attack in a furious swarm. ")
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
            ->setStage(["Bellsprout", "Weepinbell", "Victreebel"])
            ->setDescription("Bellsprout's thin and flexible body lets it bend and sway to avoid any attack, however strong it may be. From its mouth, this Monster spits a corrosive fluid that melts even iron. ")
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
            ->setStage(["Bellsprout", "Weepinbell", "Victreebel"])
            ->setDescription("Weepinbell has a large hook on its rear end. At night, the Monster hooks on to a tree branch and goes to sleep. If it moves around in its sleep, it may wake up to find itself on the ground. ")
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
            ->setStage(["Bellsprout", "Weepinbell", "Victreebel"])
            ->setDescription("Victreebel has a long vine that extends from its head. This vine is waved and flicked about as if it were an animal to attract prey. When an unsuspecting prey draws near, this Monster swallows it whole. ")
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
            ->setStage(["Squirtle", "Wartotle", "Blastoise"])
            ->setDescription("Squirtle's shell is not merely used for protection. The shell's rounded shape and the grooves on its surface help minimize resistance in water, enabling this Pokémon to swim at high speeds. ")
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
            ->setDescription("Its tail is large and covered with a rich, thick fur. The tail becomes increasingly deeper in color as Wartortle ages. The scratches on its shell are evidence of this Monster's toughness as a battler.")
            ->setStage(["Squirtle", "Wartortle", "Blastoise"])
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
            ->setDescription("Bulbasaur can be seen napping in bright sunlight. There is a seed on its back. By soaking up the sun's rays, the seed grows progressively larger. ")
            ->setStage(["Bulbasaur", "Ivysaur", "Venusaur"])
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
            ->setDescription("There is a bud on this Monster's back. To support its weight, Ivysaur's legs and trunk grow thick and strong. If it starts spending more time lying in the sunlight, it's a sign that the bud will bloom into a large flower soon. ")
            ->setStage(["Bulbasaur", "Ivysaur", "Venusaur"])
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
            ->setDescription("Caterpie has a voracious appetite. It can devour leaves bigger than its body right before your eyes. From its antenna, this Pokémon releases a terrifically strong odor. ")
            ->setStage(["Caterpie", "Metapod", "Buterfree"])
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
            ->setDescription("The shell covering this Monster's body is as hard as an iron slab. Metapod does not move very much. It stays still because it is preparing its soft innards for evolution inside the hard shell. ")
            ->setStage(["Caterpie", "Metapod", "Buterfree"])
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
            ->setDescription("Butterfree has a superior ability to search for delicious honey from flowers. It can even search out, extract, and carry honey from flowers that are blooming over six miles from its nest. ")
            ->setStage(["Caterpie", "Metapod", "Buterfree"])
            ->setNumberPokedex(12);
        $manager->persist($butterfree);


        $charmander = new Pokemon();
        $charmander
            ->setName("Charmander")
            ->setAttack(60)
            ->setLife(39)
            ->setDefense(46)
            ->setSpeed(65)
            ->setImage("../assets/images/Charmander.png")
            ->setIcon("assets/icones/Charmander_icon.png")
            ->setType("Fire")
            ->setDescription("The flame that burns at the tip of its tail is an indication of its emotions. The flame wavers when Charmander is enjoying itself. If the Monster becomes enraged, the flame burns fiercely. ")
            ->setStage(["Charmander", "Charmeleon", "Charizard"])
            ->setNumberPokedex(4);
        $manager->persist($charmander);


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
            ->setDescription("Charmeleon mercilessly destroys its foes using its sharp claws. If it encounters a strong foe, it turns aggressive. In this excited state, the flame at the tip of its tail flares with a bluish white color. ")
            ->setStage(["Charmander", "Charmeleon", "Charizard"])
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
            ->setDescription("Mewtwo is a Monster that was created by genetic manipulation. However, even though the scientific power of humans created this Monster's body, they failed to endow Mewtwo with a compassionate heart. ")
            ->setStage(["Mewtwo"])
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
            ->setDescription("Cloyster is capable of swimming in the sea. It does so by swallowing water, then jetting it out toward the rear. This Monster shoots spikes from its shell using the same system. ")
            ->setStage(["Shellder", "Cloyster"])
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
            ->setDescription("Dewgong loves to snooze on bitterly cold ice. The sight of this Monster sleeping on a glacier was mistakenly thought to be a mermaid by a mariner long ago. ")
            ->setStage(["Seel", "Dewgong"])
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
            ->setDescription("Dragonair stores an enormous amount of energy inside its body. It is said to alter weather conditions in its vicinity by discharging energy from the crystals on its neck and tail. ")
            ->setStage(["Dratini", "Dragonair", "Dragonite"])
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
            ->setDescription("Dragonite is capable of circling the globe in just 16 hours. It is a kindhearted Monster that leads lost and foundering ships in a storm to the safety of land. ")
            ->setStage(["Dratini", "Dragonair", "Dragonite"])
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
            ->setDescription("Dratini continually molts and sloughs off its old skin. It does so because the life energy within its body steadily builds to reach uncontrollable levels. ")
            ->setStage(["Dratini", "Dragonair", "Dragonite"])
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
            ->setDescription("If your nose becomes itchy while you are sleeping, it's a sure sign that one of these Monster is standing above your pillow and trying to eat your dream through your nostrils. ")
            ->setStage(["Drowzee", "Hypno"])
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
            ->setDescription("This Monster consists of six eggs that form a closely knit cluster. The six eggs attract each other and spin around. When cracks increasingly appear on the eggs, Exeggcute is close to evolution. ")
            ->setStage(["Exeggcute", "Exeggutor"])
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
            ->setDescription("Exeggutor originally came from the tropics. Its heads steadily grow larger from exposure to strong sunlight. It is said that when the heads fall off, they group together to form Exeggcute. ")
            ->setStage(["Exeggcute", "Exeggutor"])
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
            ->setDescription("Flareon's fluffy fur has a functional purpose—it releases heat into the air so that its body does not get excessively hot. This Monster's body temperature can rise to a maximum of 1,650 degrees Fahrenheit. ")
            ->setStage(["Eevee", "Flareon"])
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
            ->setDescription("The longer a Geodude lives, the more its edges are chipped and worn away, making it more rounded in appearance. However, this Monster's heart will remain hard, craggy, and rough always.")
            ->setStage(["Geodude", "Graveler", "Golem"])
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
            ->setDescription("Gloom releases a foul fragrance from the pistil of its flower. When faced with danger, the stench worsens. If this Monster is feeling calm and secure, it does not release its usual stinky aroma.")
            ->setStage(["Oddish", "Gloom", "Vileplume"])
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
            ->setDescription("Golbat loves to drink the blood of living things. It is particularly active in the pitch black of night. This Monster flits around in the night skies, seeking fresh blood. ")
            ->setStage(["Zubat", "Golbat"])
            ->setNumberPokedex(42);
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
            ->setDescription("Goldeen is a very beautiful Monster with fins that billow elegantly in water. However, don't let your guard down around this Monster—it could ram you powerfully with its horn. ")
            ->setStage(["Goldeen", "Seaking"])
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
            ->setDescription("The webbed flippers on its forelegs and hind legs and the streamlined body of Golduck give it frightening speed. This Monster is definitely much faster than even the most athletic swimmer. ")
            ->setStage(["Psyduck", "Golduck"])
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
            ->setDescription("Golem live up on mountains. If there is a large earthquake, these Monster will come rolling down off the mountains en masse to the foothills below. ")
            ->setStage(["Geodude", "Graveler", "Golem"])
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
            ->setDescription("Graveler grows by feeding on rocks. Apparently, it prefers to eat rocks that are covered in moss. This Monster eats its way through a ton of rocks on a daily basis. ")
            ->setStage(["Geodude", "Graveler", "Golem"])
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
            ->setDescription("Grimer's sludgy and rubbery body can be forced through any opening, however small it may be. This Monster enters sewer pipes to drink filthy wastewater. ")
            ->setStage(["Grimer", "Muk"])
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
            ->setDescription("When Magikarp evolves into Gyarados, its brain cells undergo a structural transformation. It is said that this transformation is to blame for this Monster's wildly violent nature. ")
            ->setStage(["Magikarp", "Gyarados"])
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
            ->setDescription("Horsea eats small insects and moss off of rocks. If the ocean current turns fast, this Monster anchors itself by wrapping its tail around rocks or coral to prevent being washed away. ")
            ->setStage(["Horsea", "Seadra"])
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
            ->setDescription("Hypno holds a pendulum in its hand. The arcing movement and glitter of the pendulum lull the foe into a deep state of hypnosis. While this Monster searches for prey, it polishes the pendulum. ")
            ->setStage(["Drowzee", "Hypno"])
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
            ->setDescription("Jynx walks rhythmically, swaying and shaking its hips as if it were dancing. Its motions are so bouncingly alluring, people seeing it are compelled to shake their hips without giving any thought to what they are doing. ")
            ->setStage(["Jynx"])
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
            ->setDescription("Kabuto is a Monster that has been regenerated from a fossil. However, in extremely rare cases, living examples have been discovered. The Monster has not changed at all for 300 million years. ")
            ->setStage(["Kabuto", "Kabutops"])
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
            ->setDescription("Kabutops swam underwater to hunt for its prey in ancient times. The Monster was apparently evolving from being a water dweller to living on land as evident from the beginnings of change in its gills and legs. ")
            ->setStage(["Kabuto", "Kabutops"])
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
            ->setDescription("Kingler has an enormous, oversized claw. It waves this huge claw in the air to communicate with others. However, because the claw is so heavy, the Monster quickly tires. ")
            ->setStage(["Krabby", "Kingler"])
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
            ->setDescription("If Koffing becomes agitated, it raises the toxicity of its internal gases and jets them out from all over its body. This Monster may also overinflate its round body, then explode. ")
            ->setStage(["Koffing", "Weezing"])
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
            ->setDescription("Krabby live on beaches, burrowed inside holes dug into the sand. On sandy beaches with little in the way of food, these Monster can be seen squabbling with each other over territory. ")
            ->setStage(["Krabby", "Kingler"])
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
            ->setDescription("People have driven Lapras almost to the point of extinction. In the evenings, this Monster is said to sing plaintively as it seeks what few others of its kind still remain. ")
            ->setStage(["Lapras"])
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
            ->setDescription("Magikarp is a pathetic excuse for a Monster that is only capable of flopping and splashing. This behavior prompted scientists to undertake research into it. ")
            ->setStage(["Magikarp", "Gyarados"])
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
            ->setDescription("In battle, Magmar blows out intensely hot flames from all over its body to intimidate its opponent. This Monster's fiery bursts create heat waves that ignite grass and trees in its surroundings. ")
            ->setStage(["Magmar"])
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
            ->setDescription("Mew is said to possess the genetic composition of all Monster. It is capable of making itself invisible at will, so it entirely avoids notice even if it approaches people. ")
            ->setStage(["Mew"])
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
            ->setDescription("Mr. Mime is a master of pantomime. Its gestures and motions convince watchers that something unseeable actually exists. Once the watchers are convinced, the unseeable thing exists as if it were real. ")
            ->setStage(["Mr. Mime"])
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
            ->setDescription("From Muk's body seeps a foul fluid that gives off a nose-bendingly horrible stench. Just one drop of this Monster's body fluid can turn a pool stagnant and rancid. ")
            ->setStage(["Grimer", "Muk"])
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
            ->setIcon("assets/icones/Nidoking_icon.png")
            ->setType("Poison")
            ->setDescription("Nidoking's thick tail packs enormously destructive power. With one swing, it can topple a metal transmission tower. Once this Monster goes on a rampage, there is no stopping it. ")
            ->setStage(["Nidoran-M", "Nidorino", "Nidoking"])
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
            ->setDescription("Nidoqueen's body is encased in extremely hard scales. It is adept at sending foes flying with harsh tackles. This Monster is at its strongest when it is defending its young.")
            ->setStage(["Nidoran-F", "Nidorina", "Nidoqueen"])
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
            ->setDescription("Nidoran♂ has developed muscles for moving its ears. Thanks to them, the ears can be freely moved in any direction. Even the slightest sound does not escape this Monster's notice. ")
            ->setStage(["Nidoran-M", "Nidorino", "Nidoking"])
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
            ->setDescription("Nidoran♀ has barbs that secrete a powerful poison. They are thought to have developed as protection for this small-bodied Monster. When enraged, it releases a horrible toxin from its horn. ")
            ->setStage(["Nidoran-F", "Nidorina", "Nidoqueen"])
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
            ->setDescription("When Nidorina are with their friends or family, they keep their barbs tucked away to prevent hurting each other. This Monster appears to become nervous if separated from the others. ")
            ->setStage(["Nidoran-F", "Nidorina", "Nidoqueen"])
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
            ->setDescription("Nidorino has a horn that is harder than a diamond. If it senses a hostile presence, all the barbs on its back bristle up at once, and it challenges the foe with all its might. ")
            ->setStage(["Nidoran-M", "Nidorino", "Nidoking"])
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
            ->setDescription("Ninetales casts a sinister light from its bright red eyes to gain total control over its foe's mind. This Monster is said to live for a thousand years.")
            ->setStage(["Vulpix", "Ninetales"])
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
            ->setDescription("During the daytime, Oddish buries itself in soil to absorb nutrients from the ground using its entire body. The more fertile the soil, the glossier its leaves become. ")
            ->setStage(["Oddish", "Gloom", "Vileplume"])
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
            ->setDescription("Omanyte is one of the ancient and long-since-extinct Monster that have been regenerated from fossils by people. If attacked by an enemy, it withdraws itself inside its hard shell. ")
            ->setStage(["Omanyte", "Omastar"])
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
            ->setDescription("Omastar uses its tentacles to capture its prey. It is believed to have become extinct because its shell grew too large and heavy, causing its movements to become too slow and ponderous. ")
            ->setStage(["Omanyte", "Omastar"])
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
            ->setDescription("Onix has a magnet in its brain. It acts as a compass so that this Monster does not lose direction while it is tunneling. As it grows older, its body becomes increasingly rounder and smoother. ")
            ->setStage(["Onix"])
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
            ->setDescription("Paras has parasitic mushrooms growing on its back called tochukaso. They grow large by drawing nutrients from this Bug Monster host. They are highly valued as a medicine for extending life. ")
            ->setStage(["Paras", "Parasect"])
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
            ->setDescription("Paras has parasitic mushrooms growing on its back called tochukaso. They grow large by drawing nutrients from this Bug Monster host. They are highly valued as a medicine for extending life. ")
            ->setStage(["Paras", "Parasect"])
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
            ->setDescription("Pinsir is astoundingly strong. It can grip a foe weighing twice its weight in its horns and easily lift it. This Monster's movements turn sluggish in cold places. ")
            ->setStage(["Pinsir"])
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
            ->setDescription("Poliwag has a very thin skin. It is possible to see the Monster's spiral innards right through the skin. Despite its thinness, however, the skin is also very flexible. Even sharp fangs bounce right off it. ")
            ->setStage(["Poliwag", "Poliwhirl", "Poliwrath"])
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
            ->setDescription("The surface of Poliwhirl's body is always wet and slick with a slimy fluid. Because of this slippery covering, it can easily slip and slide out of the clutches of any enemy in battle. ")
            ->setStage(["Poliwag", "Poliwhirl", "Poliwrath"])
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
            ->setDescription("Poliwrath's highly developed, brawny muscles never grow fatigued, however much it exercises. It is so tirelessly strong, this Monster can swim back and forth across the ocean without effort. ")
            ->setStage(["Poliwag", "Poliwhirl", "Poliwrath"])
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
            ->setDescription("Ponyta is very weak at birth. It can barely stand up. This Monster becomes stronger by stumbling and falling to keep up with its parent. ")
            ->setStage(["Ponyta", "Rapidash"])
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
            ->setDescription("Psyduck uses a mysterious power. When it does so, this Monster generates brain waves that are supposedly only seen in sleepers. This discovery spurred controversy among scholars. ")
            ->setStage(["Psyduck", "Golduck"])
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
            ->setDescription("Rapidash usually can be seen casually cantering in the fields and plains. However, when this Monster turns serious, its fiery manes flare and blaze as it gallops its way up to 150 mph. ")
            ->setStage(["Ponyta", "Rapidash"])
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
            ->setDescription("Scyther is blindingly fast. Its blazing speed enhances the effectiveness of the twin scythes on its forearms. This Monster's scythes are so effective, they can slice through thick logs in one wicked stroke. ")
            ->setStage(["Scyther"])
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
            ->setDescription("Seadra sleeps after wriggling itself between the branches of coral. Those trying to harvest coral are occasionally stung by this Monster's poison barbs if they fail to notice it. ")
            ->setStage(["Horsea", "Seadra"])
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
            ->setDescription("In the autumn, Seaking males can be seen performing courtship dances in riverbeds to woo females. During this season, this Monster's body coloration is at its most beautiful. ")
            ->setStage(["Goldeen", "Seaking"])
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
            ->setDescription("Seel hunts for prey in the frigid sea underneath sheets of ice. When it needs to breathe, it punches a hole through the ice with the sharply protruding section of its head. ")
            ->setStage(["Seel", "Dewgong"])
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
            ->setDescription("At night, this Monster uses its broad tongue to burrow a hole in the seafloor sand and then sleep in it. While it is sleeping, Shellder closes its shell, but leaves its tongue hanging out. ")
            ->setStage(["Shellder", "Cloyster"])
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
            ->setDescription("Slowbro's tail has a Shellder firmly attached with a bite. As a result, the tail can't be used for fishing anymore. This causes Slowbro to grudgingly swim and catch prey instead. ")
            ->setStage(["Slowpoke", "Slowbro"])
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
            ->setDescription("Slowpoke uses its tail to catch prey by dipping it in water at the side of a river. However, this Monster often forgets what it's doing and often spends entire days just loafing at water's edge. ")
            ->setStage(["Slowpoke", "Slowbro"])
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
            ->setDescription("Starmie's center section—the core—glows brightly in seven colors. Because of its luminous nature, this Monster has been given the nickname “the gem of the sea.\" ")
            ->setStage(["Staryu", "Starmie"])
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
            ->setDescription("Staryu's center section has an organ called the core that shines bright red. If you go to a beach toward the end of summer, the glowing cores of these Monster look like the stars in the sky. ")
            ->setStage(["Staryu", "Starmie"])
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
            ->setDescription("Tangela's vines snap off easily if they are grabbed. This happens without pain, allowing it to make a quick getaway. The lost vines are replaced by newly grown vines the very next day. ")
            ->setStage(["Tangela", "Tangrowth"])
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
            ->setDescription("Tentacool's body is largely composed of water. If it is removed from the sea, it dries up like parchment. If this Monster happens to become dehydrated, put it back into the sea. ")
            ->setStage(["Tentacool", "Tentacruel"])
            ->setNumberPokedex(72);
        $manager->persist($tentacool);


        $tentacruel = new Pokemon();
        $tentacruel
            ->setName("Tentacruel")
            ->setAttack(80)
            ->setLife(80)
            ->setDefense(92)
            ->setSpeed(100)
            ->setImage("../assets/images/Tentacruel.png")
            ->setIcon("assets/icones/Tentacruel_icon.png")
            ->setType("Water")
            ->setStage(["Tentacool", "Tentacruel"])
            ->setDescription("Its 80 tentacles can stretch and contract freely. They wrap around prey and weaken it with poison.")
            ->setNumberPokedex(73);
        $manager->persist($tentacruel);


        $vaporeon = new Pokemon();
        $vaporeon
            ->setName("Vaporeon")
            ->setAttack(110)
            ->setLife(130)
            ->setDefense(77)
            ->setSpeed(65)
            ->setImage("../assets/images/Vaporeon.png")
            ->setIcon("assets/icones/Vaporeon_icon.png")
            ->setType("Water")
            ->setStage(["Eevee", "Vaporeon"])
            ->setDescription("Its cell structure is similar to water molecules. It melts into the water and becomes invisible.")
            ->setNumberPokedex(134);
        $manager->persist($vaporeon);


        $venomoth = new Pokemon();
        $venomoth
            ->setName("Venomoth")
            ->setAttack(90)
            ->setLife(70)
            ->setDefense(67)
            ->setSpeed(90)
            ->setImage("../assets/images/Venomoth.png")
            ->setIcon("assets/icones/Venomoth_icon.png")
            ->setType("bug")
            ->setStage(["venonat", "Venomoth"])
            ->setDescription("The powdery scales on its wings are hard to remove from skin. They also contain poison that leaks out on contact.")
            ->setNumberPokedex(49);
        $manager->persist($venomoth);


        $venonat = new Pokemon();
        $venonat
            ->setName("Venonat")
            ->setAttack(55)
            ->setLife(60)
            ->setDefense(52)
            ->setSpeed(45)
            ->setImage("../assets/images/Venonat.png")
            ->setIcon("assets/icones/Venonat_icon.png")
            ->setType("Bug")
            ->setStage(["Venonat", "Venomoth"])
            ->setDescription("Its large eyes act as a radar. In a bright place, you can see that they are clusters of many tiny eyes.")
            ->setNumberPokedex(48);
        $manager->persist($venonat);


        $vileplume = new Pokemon();
        $vileplume
            ->setName("Vileplume")
            ->setAttack(110)
            ->setLife(75)
            ->setDefense(87)
            ->setSpeed(50)
            ->setImage("../assets/images/Vileplume.png")
            ->setIcon("assets/icones/Vileplume_icon.png")
            ->setType("Grass")
            ->setStage(["Oddish", "Bloom", "Vileplume"])
            ->setDescription("Flaps its broad flower petals to scatter its poisonous pollen. The flapping sound is very loud.
")
            ->setNumberPokedex(45);
        $manager->persist($vileplume);


        $vulpix = new Pokemon();
        $vulpix
            ->setName("Vulpix")
            ->setAttack(50)
            ->setLife(38)
            ->setDefense(52)
            ->setSpeed(65)
            ->setImage("../assets/images/Vulpix.png")
            ->setIcon("assets/icones/Vulpix_icon.png")
            ->setType("Fire")
            ->setStage(["Vulpix", "Ninetails"])
            ->setDescription("Both its fur and its tails are beautiful. As it grows, the tails split and form more tails.")
            ->setNumberPokedex(37);
        $manager->persist($vulpix);


        $weezing = new Pokemon();
        $weezing
            ->setName("Weezing")
            ->setAttack(90)
            ->setLife(65)
            ->setDefense(95)
            ->setSpeed(60)
            ->setImage("../assets/images/Weezing.png")
            ->setIcon("assets/icones/Weezing_icon.png")
            ->setType("Poison")
            ->setStage(["Koffing", "Weezing"])
            ->setDescription("This Pokémon lives and grows by absorbing poison gas, dust, and germs that exist inside garbage.")
            ->setNumberPokedex(110);
        $manager->persist($weezing);


        $zubat = new Pokemon();
        $zubat
            ->setName("Zubat")
            ->setAttack(45)
            ->setLife(40)
            ->setDefense(37)
            ->setSpeed(55)
            ->setImage("../assets/images/Zubat.png")
            ->setIcon("assets/icones/Zubat_icon.png")
            ->setType("Poison")
            ->setStage(["Zubat", "Golbat"])
            ->setDescription("Emits ultrasonic cries while it flies. They act as a sonar used to check for objects in its way.")
            ->setNumberPokedex(41);
        $manager->persist($zubat);


        $chansey = new Pokemon();
        $chansey
            ->setName("Chansey")
            ->setAttack(35)
            ->setLife(250)
            ->setDefense(55)
            ->setSpeed(50)
            ->setImage("../assets/images/Chansey.png")
            ->setIcon("assets/icones/Chansey_icon.png")
            ->setType("Normal")
            ->setStage(["Chansey"])
            ->setDescription("A gentle and kindhearted Monster that shares its nutritious eggs if it sees an injured Monster.")
            ->setNumberPokedex(113);
        $manager->persist($chansey);


        $clefable = new Pokemon();
        $clefable
            ->setName("Clefable")
            ->setAttack(95)
            ->setLife(95)
            ->setDefense(81)
            ->setSpeed(60)
            ->setImage("../assets/images/Clefable.png")
            ->setIcon("assets/icones/Clefable_icon.png")
            ->setType("Fairy")
            ->setStage(["Clefairy", "Clefable"])
            ->setDescription("They appear to be very protective of their own world. It is a kind of fairy, rarely seen by people.")
            ->setNumberPokedex(36);
        $manager->persist($clefable);


        $clefairy = new Pokemon();
        $clefairy
            ->setName("Clefairy")
            ->setAttack(60)
            ->setLife(70)
            ->setDefense(56)
            ->setSpeed(35)
            ->setImage("../assets/images/Clefairy.png")
            ->setIcon("assets/icones/Clefairy_icon.png")
            ->setType("Fairy")
            ->setStage(["Clefairy", "Clefable"])
            ->setDescription("Adored for their cute looks and playfulness. They are thought to be rare, as they do not appear often.")
            ->setNumberPokedex(35);
        $manager->persist($clefairy);


        $cubone = new Pokemon();
        $cubone
            ->setName("Cubone")
            ->setAttack(50)
            ->setLife(50)
            ->setDefense(72)
            ->setSpeed(35)
            ->setImage("../assets/images/Cubone.png")
            ->setIcon("assets/icones/Cubone_icon.png")
            ->setType("Ground")
            ->setStage(["Cubone", "Marowark"])
            ->setDescription("Wears the skull of its deceased mother. Its cries echo inside the skull and come out as a sad melody.")
            ->setNumberPokedex(104);
        $manager->persist($cubone);


        $diglett = new Pokemon();
        $diglett
            ->setName("Diglett")
            ->setAttack(55)
            ->setLife(10)
            ->setDefense(35)
            ->setSpeed(95)
            ->setImage("../assets/images/Diglett.png")
            ->setIcon("assets/icones/Diglett_icon.png")
            ->setType("Ground")
            ->setStage(["Diglett", "Dugtrio"])
            ->setDescription("Wears the skull of its deceased mother. Its cries echo inside the skull and come out as a sad melody.")
            ->setNumberPokedex(50);
        $manager->persist($diglett);


        $ditto = new Pokemon();
        $ditto
            ->setName("Ditto")
            ->setAttack(48)
            ->setLife(48)
            ->setDefense(48)
            ->setSpeed(48)
            ->setImage("../assets/images/Ditto.png")
            ->setIcon("assets/icones/Ditto_icon.png")
            ->setType("Normal")
            ->setStage(["Ditto"])
            ->setDescription("When it spots an enemy, its body transfigures into an almost-perfect copy of its opponent.")
            ->setNumberPokedex(132);
        $manager->persist($ditto);


        $dodrio = new Pokemon();
        $dodrio
            ->setName("Dodrio")
            ->setAttack(110)
            ->setLife(60)
            ->setDefense(65)
            ->setSpeed(110)
            ->setImage("../assets/images/Dodrio.png")
            ->setIcon("assets/icones/Dodrio_icon.png")
            ->setType("Normal")
            ->setStage(["Doduo", "Dodrio"])
            ->setDescription("One of Doduo's two heads splits to form a unique species. It runs close to 40 mph in prairies.")
            ->setNumberPokedex(85);
        $manager->persist($dodrio);


        $doduo = new Pokemon();
        $doduo
            ->setName("Doduo")
            ->setAttack(85)
            ->setLife(35)
            ->setDefense(40)
            ->setSpeed(75)
            ->setImage("../assets/images/Doduo.png")
            ->setIcon("assets/icones/Doduo_icon.png")
            ->setType("Normal")
            ->setStage(["Doduo", "Dodrio"])
            ->setDescription("Its short wings make flying difficult. Instead, this Pokémon runs at high speed on developed legs.")
            ->setNumberPokedex(84);
        $manager->persist($doduo);


        $dugtrio = new Pokemon();
        $dugtrio
            ->setName("Dugtrio")
            ->setAttack(100)
            ->setLife(35)
            ->setDefense(60)
            ->setSpeed(120)
            ->setImage("../assets/images/Dugtrio.png")
            ->setIcon("assets/icones/Dugtrio_icon.png")
            ->setType("Ground")
            ->setStage(["Diglett", "Dugtrio"])
            ->setDescription("A team of triplets that can burrow to a depth of 60 miles. It's reported that this triggers an earthquake.")
            ->setNumberPokedex(51);
        $manager->persist($dugtrio);


        $eevee = new Pokemon();
        $eevee
            ->setName("Eevee")
            ->setAttack(55)
            ->setLife(55)
            ->setDefense(57)
            ->setSpeed(55)
            ->setImage("../assets/images/Eevee.png")
            ->setIcon("assets/icones/Eevee_icon.png")
            ->setType("Normal")
            ->setStage(["Eevee", "Vaporeon", "Jolteon", "Flareon"])
            ->setDescription("It can evolve into a variety of forms. Eevee's genes are the key to solving the mysteries of Monster evolution.")
            ->setNumberPokedex(133);
        $manager->persist($eevee);


        $electabuzz = new Pokemon();
        $electabuzz
            ->setName("Electabuzz")
            ->setAttack(95)
            ->setLife(65)
            ->setDefense(71)
            ->setSpeed(105)
            ->setImage("../assets/images/Electabuzz.png")
            ->setIcon("assets/icones/Electabuzz_icon.png")
            ->setType("Electric")
            ->setStage(["Electabuzz"])
            ->setDescription("If a major power outage occurs, it is certain that this Pokémon has eaten electricity at a power plant.")
            ->setNumberPokedex(125);
        $manager->persist($electabuzz);


        $electrode = new Pokemon();
        $electrode
            ->setName("Electrode")
            ->setAttack(80)
            ->setLife(60)
            ->setDefense(75)
            ->setSpeed(150)
            ->setImage("../assets/images/Electrode.png")
            ->setIcon("assets/icones/Electrode_icon.png")
            ->setType("Electric")
            ->setStage(["Voltorb", "Electrode"])
            ->setDescription("Stores electrical energy inside its body. Even the slightest shock could trigger a huge explosion.")
            ->setNumberPokedex(101);
        $manager->persist($electrode);


        $farfetchd = new Pokemon();
        $farfetchd
            ->setName("Farfetch'd")
            ->setAttack(90)
            ->setLife(52)
            ->setDefense(58)
            ->setSpeed(60)
            ->setImage("../assets/images/Farfetch'd.png")
            ->setIcon("assets/icones/Farfetch'd_icon.png")
            ->setType("Normal")
            ->setStage(["Farfetch'd"])
            ->setDescription("They live where reedy plants grow. Farfetch'd are rarely seen, so it's thought their numbers are decreasing.")
            ->setNumberPokedex(83);
        $manager->persist($farfetchd);


        $fearow = new Pokemon();
        $fearow
            ->setName("Fearow")
            ->setAttack(90)
            ->setLife(65)
            ->setDefense(63)
            ->setSpeed(100)
            ->setImage("../assets/images/Fearow.png")
            ->setIcon("assets/icones/Fearow_icon.png")
            ->setType("Normal")
            ->setStage(["Spearow", "Fearow"])
            ->setDescription("A Pokémon that dates back many years. If it senses danger, it flies high and away, instantly.")
            ->setNumberPokedex(22);
        $manager->persist($fearow);


        $gastly = new Pokemon();
        $gastly
            ->setName("Gastly")
            ->setAttack(100)
            ->setLife(30)
            ->setDefense(32)
            ->setSpeed(80)
            ->setImage("../assets/images/Gastly.png")
            ->setIcon("assets/icones/Gastly_icon.png")
            ->setType("Ghost")
            ->setStage(["Gastly", "Haunter", "Gengar"])
            ->setDescription("Said to appear in decrepit, deserted buildings. It has no real shape, as it appears to be made of a gas.")
            ->setNumberPokedex(92);
        $manager->persist($gastly);


        $gengar = new Pokemon();
        $gengar
            ->setName("gengar")
            ->setAttack(130)
            ->setLife(60)
            ->setDefense(67)
            ->setSpeed(110)
            ->setImage("../assets/images/Gengar.png")
            ->setIcon("assets/icones/Gengar_icon.png")
            ->setType("Ghost")
            ->setStage(["Gastly", "Haunter", "Gengar"])
            ->setDescription("It can pass through other dimensions and can appear anywhere. It caused a stir one time when it stuck just one leg out of a wall.")
            ->setNumberPokedex(94);
        $manager->persist($gengar);


        $haunter = new Pokemon();
        $haunter
            ->setName("Haunter")
            ->setAttack(115)
            ->setLife(45)
            ->setDefense(50)
            ->setSpeed(95)
            ->setImage("../assets/images/Haunter.png")
            ->setIcon("assets/icones/Haunter_icon.png")
            ->setType("Ghost")
            ->setStage(["Gastly", "Haunter", "Gengar"])
            ->setDescription("By licking, it saps the victim's life. It causes shaking that won't stop until the victim's demise.")
            ->setNumberPokedex(93);
        $manager->persist($haunter);


        $hitmonlee = new Pokemon();
        $hitmonlee
            ->setName("Hitmonlee")
            ->setAttack(120)
            ->setLife(50)
            ->setDefense(81)
            ->setSpeed(87)
            ->setImage("../assets/images/Hitmonlee.png")
            ->setIcon("assets/icones/Hitmonlee_icon.png")
            ->setType("Fighting")
            ->setStage(["Hitmonlee"])
            ->setDescription("When kicking, the sole of its foot turns as hard as a diamond on impact and destroys its enemy.")
            ->setNumberPokedex(106);
        $manager->persist($hitmonlee);


        $hitmonchan = new Pokemon();
        $hitmonchan
            ->setName("Hitmonchan")
            ->setAttack(105)
            ->setLife(50)
            ->setDefense(94)
            ->setSpeed(76)
            ->setImage("../assets/images/Hitmonchan.png")
            ->setIcon("assets/icones/Hitmonchan_icon.png")
            ->setType("Fighting")
            ->setStage(["Hitmonchan"])
            ->setDescription("Punches in corkscrew fashion. It can punch its way through a concrete wall like a drill.")
            ->setNumberPokedex(107);
        $manager->persist($hitmonchan);


        $jigglypuff = new Pokemon();
        $jigglypuff
            ->setName("Jigglypuff")
            ->setAttack(45)
            ->setLife(115)
            ->setDefense(22)
            ->setSpeed(20)
            ->setImage("../assets/images/Jigglypuff.png")
            ->setIcon("assets/icones/Jigglypuff_icon.png")
            ->setType("Normal")
            ->setStage(["Jigglypuff", "Wigglytuff"])
            ->setDescription("Uses its cute round eyes to enrapture its foe. It then sings a pleasing melody that lulls the foe to sleep.")
            ->setNumberPokedex(39);
        $manager->persist($jigglypuff);


        $jolteon = new Pokemon();
        $jolteon
            ->setName("Jolteon")
            ->setAttack(110)
            ->setLife(65)
            ->setDefense(77)
            ->setSpeed(130)
            ->setImage("../assets/images/Jolteon.png")
            ->setIcon("assets/icones/Jolteon_icon.png")
            ->setType("Electric")
            ->setStage(["Eevee", "Jolteon"])
            ->setDescription("A sensitive Pokémon that easily becomes sad or angry. Every time its mood changes, it charges power.")
            ->setNumberPokedex(135);
        $manager->persist($jolteon);


        $kangaskhan = new Pokemon();
        $kangaskhan
            ->setName("Kangaskhan")
            ->setAttack(95)
            ->setLife(105)
            ->setDefense(80)
            ->setSpeed(90)
            ->setImage("../assets/images/Kangaskhan.png")
            ->setIcon("assets/icones/Kangaskhan_icon.png")
            ->setType("Normal")
            ->setStage(["Kangaskhan"])
            ->setDescription("Raises its young in its belly pouch. Won't run from any fight to keep its young protected.")
            ->setNumberPokedex(115);
        $manager->persist($kangaskhan);


        $lickitung = new Pokemon();
        $lickitung
            ->setName("Lickitung")
            ->setAttack(60)
            ->setLife(90)
            ->setDefense(75)
            ->setSpeed(30)
            ->setImage("../assets/images/Lickitung.png")
            ->setIcon("assets/icones/Lickitung_icon.png")
            ->setType("Normal")
            ->setStage(["Lickitung"])
            ->setDescription("Its tongue spans almost seven feet and moves more freely than its forelegs. Its licks can cause paralysis.")
            ->setNumberPokedex(108);
        $manager->persist($lickitung);


        $machamp = new Pokemon();
        $machamp
            ->setName("Machamp")
            ->setAttack(130)
            ->setLife(90)
            ->setDefense(82)
            ->setSpeed(55)
            ->setImage("../assets/images/Machamp.png")
            ->setIcon("assets/icones/Machamp_icon.png")
            ->setType("Fighting")
            ->setStage(["Machop", "Machoke", "Machamp"])
            ->setDescription("One arm alone can move mountains. Using all four arms, this Pokémon fires off awesome punches.")
            ->setNumberPokedex(68);
        $manager->persist($machamp);


        $machoke = new Pokemon();
        $machoke
            ->setName("Machoke")
            ->setAttack(100)
            ->setLife(80)
            ->setDefense(65)
            ->setSpeed(45)
            ->setImage("../assets/images/Machoke.png")
            ->setIcon("assets/icones/Machoke_icon.png")
            ->setType("Fighting")
            ->setStage(["Machop", "Machoke", "Machamp"])
            ->setDescription("The belt around its waist holds back its energy. Without it, this Pokémon would be unstoppable.")
            ->setNumberPokedex(67);
        $manager->persist($machoke);


        $machop = new Pokemon();
        $machop
            ->setName("Machop")
            ->setAttack(80)
            ->setLife(70)
            ->setDefense(42)
            ->setSpeed(35)
            ->setImage("../assets/images/Machop.png")
            ->setIcon("assets/icones/Machop_icon.png")
            ->setType("Fighting")
            ->setStage(["Machop", "Machoke", "Machamp"])
            ->setDescription("Very powerful in spite of its small size. Its mastery of many types of martial arts makes it very tough.")
            ->setNumberPokedex(66);
        $manager->persist($machop);


        $magnemite = new Pokemon();
        $magnemite
            ->setName("Magnemite")
            ->setAttack(95)
            ->setLife(25)
            ->setDefense(62)
            ->setSpeed(45)
            ->setImage("../assets/images/Magnemite.png")
            ->setIcon("assets/icones/Magnemite_icon.png")
            ->setType("Electric")
            ->setStage(["Magnemite", "Magneton"])
            ->setDescription("	It is hatched with the ability to defy gravity. It floats while emitting powerful electromagnetic waves.")
            ->setNumberPokedex(81);
        $manager->persist($magnemite);


        $magneton = new Pokemon();
        $magneton
            ->setName("Magneton")
            ->setAttack(120)
            ->setLife(50)
            ->setDefense(82)
            ->setSpeed(70)
            ->setImage("../assets/images/Magneton.png")
            ->setIcon("assets/icones/Magneton_icon.png")
            ->setType("Electric")
            ->setStage(["Magnemite", "Magneton"])
            ->setDescription("Generates strange radio signals. It raises the temperature by 3.6 degrees Fahrenheit within 3,300 feet.")
            ->setNumberPokedex(82);
        $manager->persist($magneton);


        $mankey = new Pokemon();
        $mankey
            ->setName("Mankey")
            ->setAttack(80)
            ->setLife(40)
            ->setDefense(40)
            ->setSpeed(70)
            ->setImage("../assets/images/Mankey.png")
            ->setIcon("assets/icones/Mankey_icon.png")
            ->setType("Fighting")
            ->setStage(["Mankey", "Primeape"])
            ->setDescription("An agile Pokémon that lives in trees. It angers easily and will not hesitate to attack anything.")
            ->setNumberPokedex(56);
        $manager->persist($mankey);


        $marowak = new Pokemon();
        $marowak
            ->setName("Marowak")
            ->setAttack(80)
            ->setLife(60)
            ->setDefense(95)
            ->setSpeed(45)
            ->setImage("../assets/images/Marowak.png")
            ->setIcon("assets/icones/Marowak_icon.png")
            ->setType("Ground")
            ->setStage(["Cubone", "Marowak"])
            ->setDescription("Small and weak, this Pokémon is adept with its bone club. It has grown more vicious over the ages.")
            ->setNumberPokedex(105);
        $manager->persist($marowak);


        $meowth = new Pokemon();
        $meowth
            ->setName("Meowth")
            ->setAttack(45)
            ->setLife(40)
            ->setDefense(37)
            ->setSpeed(90)
            ->setImage("../assets/images/Meowth.png")
            ->setIcon("assets/icones/Meowth_icon.png")
            ->setType("Normal")
            ->setStage(["Meowth", "Persian"])
            ->setDescription("Appears to be more active at night. It loves round and shiny things. It can't stop itself from picking them up")
            ->setNumberPokedex(52);
        $manager->persist($meowth);


        $persian = new Pokemon();
        $persian
            ->setName("Persian")
            ->setAttack(70)
            ->setLife(65)
            ->setDefense(62)
            ->setSpeed(115)
            ->setImage("../assets/images/Persian.png")
            ->setIcon("assets/icones/Persian_icon.png")
            ->setType("Normal")
            ->setStage(["Meowth", "Persian"])
            ->setDescription("The gem in its forehead glows on its own! It walks with all the grace and elegance of a proud queen.")
            ->setNumberPokedex(53);
        $manager->persist($persian);


        $pidgeot = new Pokemon();
        $pidgeot
            ->setName("Pidgeot")
            ->setAttack(80)
            ->setLife(83)
            ->setDefense(72)
            ->setSpeed(101)
            ->setImage("../assets/images/Pidgeot.png")
            ->setIcon("assets/icones/Pidgeot_icon.png")
            ->setType("Normal")
            ->setStage(["Pidgey", "Pidgeotto", "Pidgeot"])
            ->setDescription("This Pokémon flies at Mach 2 speed, seeking prey. Its large talons are feared as wicked weapons.")
            ->setNumberPokedex(18);
        $manager->persist($pidgeot);


        $pidgeotto = new Pokemon();
        $pidgeotto
            ->setName("Pidgeotto")
            ->setAttack(60)
            ->setLife(63)
            ->setDefense(52)
            ->setSpeed(71)
            ->setImage("../assets/images/Pidgeotto.png")
            ->setIcon("assets/icones/Pidgeotto_icon.png")
            ->setType("Normal")
            ->setStage(["Pidgey", "Pidgeotto", "Pidgeot"])
            ->setDescription("This Monster is full of vitality. It constantly flies around its large territory in search of prey.")
            ->setNumberPokedex(17);
        $manager->persist($pidgeotto);


        $pidgey = new Pokemon();
        $pidgey
            ->setName("Pidgey")
            ->setAttack(45)
            ->setLife(40)
            ->setDefense(37)
            ->setSpeed(56)
            ->setImage("../assets/images/Pidgey.png")
            ->setIcon("assets/icones/Pidgey_icon.png")
            ->setType("Normal")
            ->setStage(["Pidgey", "Pidgeotto", "Pidgeot"])
            ->setDescription("Very docile. If attacked, it will often kick up sand to protect itself rather than fight back.")
            ->setNumberPokedex(16);
        $manager->persist($pidgey);


        $pikachu = new Pokemon();
        $pikachu
            ->setName("Pikachu")
            ->setAttack(55)
            ->setLife(35)
            ->setDefense(45)
            ->setSpeed(90)
            ->setImage("../assets/images/Pikachu.png")
            ->setIcon("assets/icones/Pikachu_icon.png")
            ->setType("Electric")
            ->setStage(["Pikachu", "Raichu"])
            ->setDescription("This forest-dwelling Monster stores electricity in its cheeks, so you'll feel a tingly shock if you touch it.")
            ->setNumberPokedex(25);
        $manager->persist($pikachu);


        $porygon = new Pokemon();
        $porygon
            ->setName("Porygon")
            ->setAttack(85)
            ->setLife(65)
            ->setDefense(72)
            ->setSpeed(40)
            ->setImage("../assets/images/Porygon.png")
            ->setIcon("assets/icones/Porygon_icon.png")
            ->setType("Normal")
            ->setStage(["Porygon"])
            ->setDescription("The only Pokémon that people anticipate can fly into space. None has managed the feat yet, however.")
            ->setNumberPokedex(137);
        $manager->persist($porygon);


        $raticate = new Pokemon();
        $raticate
            ->setName("Raticate")
            ->setAttack(81)
            ->setLife(55)
            ->setDefense(65)
            ->setSpeed(97)
            ->setImage("../assets/images/Raticate.png")
            ->setIcon("assets/icones/Raticate_icon.png")
            ->setType("Normal")
            ->setStage(["Rattata", "Raticate"])
            ->setDescription("Its hind feet are webbed. They act as flippers, so it can swim in rivers and hunt for prey.")
            ->setNumberPokedex(20);
        $manager->persist($raticate);


        $rattata = new Pokemon();
        $rattata
            ->setName("Rattata")
            ->setAttack(56)
            ->setLife(30)
            ->setDefense(35)
            ->setSpeed(72)
            ->setImage("../assets/images/Rattata.png")
            ->setIcon("assets/icones/Rattata_icon.png")
            ->setType("Normal")
            ->setStage(["Rattata", "Raticate"])
            ->setDescription("Will chew on anything with its fangs. If you see one, you can be certain that 40 more live in the area.")
            ->setNumberPokedex(19);
        $manager->persist($rattata);


        $rhydon = new Pokemon();
        $rhydon
            ->setName("Rhydon")
            ->setAttack(130)
            ->setLife(105)
            ->setDefense(82)
            ->setSpeed(40)
            ->setImage("../assets/images/Rhydon.png")
            ->setIcon("assets/icones/Rhydon_icon.png")
            ->setType("Ground")
            ->setStage(["Rhyhorn", "Rhydon"])
            ->setDescription("Its brain developed when it began walking on its hind legs. Its armor-like hide even repels molten lava.")
            ->setNumberPokedex(112);
        $manager->persist($rhydon);


        $ryhorn = new Pokemon();
        $ryhorn
            ->setName("Ryhorn")
            ->setAttack(85)
            ->setLife(80)
            ->setDefense(62)
            ->setSpeed(25)
            ->setImage("../assets/images/Rhyhorn.png")
            ->setIcon("assets/icones/Rhyhorn_icon.png")
            ->setType("Ground")
            ->setStage(["Rhyhorn", "Rhydon"])
            ->setDescription("A Pokémon with a one-track mind. Once it charges, it won't stop running until it falls asleep.")
            ->setNumberPokedex(111);
        $manager->persist($ryhorn);


        $sandshrew = new Pokemon();
        $sandshrew
            ->setName("Sandshrew")
            ->setAttack(75)
            ->setLife(50)
            ->setDefense(57)
            ->setSpeed(40)
            ->setImage("../assets/images/Sandshrew.png")
            ->setIcon("assets/icones/Sandshrew_icon.png")
            ->setType("Ground")
            ->setStage(["Sandshrew", "Sandslash"])
            ->setDescription("A Pokémon with a one-track mind. Once it charges, it won't stop running until it falls asleep.")
            ->setNumberPokedex(27);
        $manager->persist($sandshrew);


        $sandslash = new Pokemon();
        $sandslash
            ->setName("Sandslash")
            ->setAttack(100)
            ->setLife(75)
            ->setDefense(82)
            ->setSpeed(65)
            ->setImage("../assets/images/Sandslash.png")
            ->setIcon("assets/icones/Sandslash_icon.png")
            ->setType("Ground")
            ->setStage(["Sandshrew", "Sandslash"])
            ->setDescription("It is skilled at slashing enemies with its claws. If broken, they start to grow back in a day.")
            ->setNumberPokedex(28);
        $manager->persist($sandslash);


        $snorlax = new Pokemon();
        $snorlax
            ->setName("Snorlax")
            ->setAttack(110)
            ->setLife(160)
            ->setDefense(92)
            ->setSpeed(30)
            ->setImage("../assets/images/Snorlax.png")
            ->setIcon("assets/icones/Snorlax_icon.png")
            ->setType("Normal")
            ->setStage(["Snorlax"])
            ->setDescription("Will eat anything, even if the food happens to be a little moldy. It never gets an upset stomach.")
            ->setNumberPokedex(143);
        $manager->persist($snorlax);


        $spearow = new Pokemon();
        $spearow
            ->setName("Spearow")
            ->setAttack(60)
            ->setLife(40)
            ->setDefense(30)
            ->setSpeed(70)
            ->setImage("../assets/images/Spearow.png")
            ->setIcon("assets/icones/Spearow_icon.png")
            ->setType("Normal")
            ->setStage(["Spearow", "Fearow"])
            ->setDescription("Inept at flying high. However, it can fly around very fast to protect its territory.")
            ->setNumberPokedex(21);
        $manager->persist($spearow);


        $tauros = new Pokemon();
        $tauros
            ->setName("Tauros")
            ->setAttack(100)
            ->setLife(75)
            ->setDefense(82)
            ->setSpeed(110)
            ->setImage("../assets/images/Tauros.png")
            ->setIcon("assets/icones/Tauros_icon.png")
            ->setType("Normal")
            ->setStage(["Tauros"])
            ->setDescription("A rowdy Pokémon with a lot of stamina. Once running, it won't stop until it hits something.")
            ->setNumberPokedex(128);
        $manager->persist($tauros);


        $wigglytuff = new Pokemon();
        $wigglytuff
            ->setName("Wigglytuff")
            ->setAttack(85)
            ->setLife(140)
            ->setDefense(47)
            ->setSpeed(45)
            ->setImage("../assets/images/Wigglytuff.png")
            ->setIcon("assets/icones/Wigglytuff_icon.png")
            ->setType("Normal")
            ->setStage(["Jigglypuff", "Wigglytuff"])
            ->setDescription("Its body is very elastic. By inhaling deeply, it can continue to inflate itself without limit.")
            ->setNumberPokedex(40);
        $manager->persist($wigglytuff);


        $zapdos = new Pokemon();
        $zapdos
            ->setName("Zapdos")
            ->setAttack(125)
            ->setLife(90)
            ->setDefense(87)
            ->setSpeed(100)
            ->setImage("../assets/images/Zapdos.png")
            ->setIcon("assets/icones/Zapdos_icon.png")
            ->setType("Electric")
            ->setStage(["Zapdos"])
            ->setDescription("This legendary bird Monster is said to appear when the sky turns dark and lightning showers down.")
            ->setNumberPokedex(145);
        $manager->persist($zapdos);


        $voltorb = new Pokemon();
        $voltorb
            ->setName("Voltorb")
            ->setAttack(55)
            ->setLife(40)
            ->setDefense(52)
            ->setSpeed(100)
            ->setImage("../assets/images/Voltorb.png")
            ->setIcon("assets/icones/Voltorb_icon.png")
            ->setType("Electric")
            ->setStage(["Voltorb", "Electrode"])
            ->setDescription("It is said to camouflage itself as a Poké Ball. It will self-destruct with very little stimulus.")
            ->setNumberPokedex(100);
        $manager->persist($voltorb);


        $primeape = new Pokemon();
        $primeape
            ->setName("Primeape")
            ->setAttack(105)
            ->setLife(65)
            ->setDefense(65)
            ->setSpeed(95)
            ->setImage("../assets/images/Primeape.png")
            ->setIcon("assets/icones/Primeape_icon.png")
            ->setType("Fighting")
            ->setStage(["Mankey", "Primeape"])
            ->setDescription("It stops being angry only when nobody else is around. To view this moment is very difficult.")
            ->setNumberPokedex(57);
        $manager->persist($primeape);


        $raichu = new Pokemon();
        $raichu
            ->setName("Raichu")
            ->setAttack(90)
            ->setLife(60)
            ->setDefense(72)
            ->setSpeed(110)
            ->setImage("../assets/images/Raichu.png")
            ->setIcon("assets/icones/Raichu_icon.png")
            ->setType("Electric")
            ->setStage(["Pikachu", "Raichu"])
            ->setDescription("When electricity builds up inside its body, it becomes feisty. It also glows in the dark.")
            ->setNumberPokedex(26);
        $manager->persist($raichu);


        $manager->flush();
    }
}