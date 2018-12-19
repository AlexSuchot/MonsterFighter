<?php
namespace App\Controller;
use App\Classes\Trainer;
use App\Entity\Pokemon;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PokemonRepository;
use App\Repository;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
class PokemonController extends AbstractController
{
    /**
     * @Route("/pokemon", name="pokemon")
     */
    public function index()
    {
        $player1 = new Trainer("bigeard", $this->generateTeam());

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $user->setTeam($this->generateTeam());
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($user);
        $manager->flush();

        //$fight = $this-> attack($player1->getTeam()[0],$user->getTeam()[0], );

        $hp_pokemon =  $user->getTeam()[0]->getLife();


        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'team1' => $player1->getTeam(), 'team2' => $user->getTeam(),
            'pokemon1team1' => $player1->getTeam()[0], 'pokemon1team2' => $user->getTeam()[0],
            'player1' => $player1->getName(),'player2' => $user->getPseudo(),
            'hp_pokemon' => $hp_pokemon
        ]);
    }
    public function fight(User $player, User $opponent, $fight)
    {
        while($player->getTeam() > 0 OR $opponent->getTeam() > 0){
            $fight == true;
        }
    }
    public function generateTeam()
    {

        $repository = $this->getDoctrine()->getRepository(Pokemon::class);
        $arrayPokemon = array();

        for ($i = 0; $i < 6; $i++) {
            $pokemons = $repository->findOneByNumberPokedex(rand(1,12));
            array_push($arrayPokemon, $pokemons);
        }
        return $arrayPokemon;
    }

    /**
     * @Route("/fight", name="fight")
     */

    public function fightContainer(Request $request){
        $attaquant = $request->get('attaquant');
        $user1 = $request->get('cible');
        $repository = $this->getDoctrine()->getRepository(Pokemon::class);

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $cible = $user->getTeam()[0];
        $pokemon1 = $repository->findOneByNumberPokedex($attaquant);
        $pokemon2 = $repository->findOneByNumberPokedex($cible);

        if ($request->isXMLHttpRequest()) {
            $data = $this->attack($pokemon1,$cible, $cible->getLife());
            return new JsonResponse($data);
        }
        return new Response("Erreur : ceci n'est pas une requête Ajax");
    }

    public function attack(Pokemon $attaquant, Pokemon $cible, $life)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
            $damage = $attaquant->getAttack() - $cible->getDefense();
            if ($damage < 0) {
                $damage = 10;
            }
            if ($damage < 10) {
                $damage = 20;
            }
            $life = $cible->getLife();
            $life = $life - $damage;

            //$cible->setLife($result);
            //$manager = $this->getDoctrine()->getManager();
            //$manager->persist($cible);
            //$manager->flush();

            return array("result" => $life);
    }
    public function pokemonKo()
    {
    }
    public function playerVictory(Trainer $trainer)
    {
    }
    public function votePokemon()
    {
    }
}