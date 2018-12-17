<?php
namespace App\Controller;
use App\Classes\Trainer;
use App\Entity\Pokemon;
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
        $player1 = new Trainer("Alex", $this->generateTeam());
        $player2 = new Trainer("Marceau", $this->generateTeam());

        $fight = $this-> attack($player1->getTeam()[0],$player2->getTeam()[0]);
        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'team1' => $player1->getTeam(), 'team2' => $player2->getTeam(),
            'pokemon1team1' => $player1->getTeam()[0], 'pokemon1team2' => $player2->getTeam()[0],
            'player1' => $player1->getName(),'player2' => $player2->getName()
        ]);
    }
    public function fight(Trainer $player, Trainer $opponent, $fight)
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
            $pokemons = $repository->findTeamByNumberPokedex(rand(1,12));
            array_push($arrayPokemon, $pokemons[0]);
        }
        return $arrayPokemon;
    }
    /**
     * @Route("/fight", name="fight")
     */
    public function fightContainer(Request $request){
        $attaquant = $request->request->get('attaquant');
        $cible = $request->request->get('cible');
        $repository = $this->getDoctrine()->getRepository(Pokemon::class);
        $pokemon1 = $repository->findOneByNumberPokedex($attaquant);
        $pokemon2 = $repository->findOneByNumberPokedex($cible);

        if ($request->isXMLHttpRequest()) {
            $data = $this->attack($pokemon1,$pokemon2);
            return new JsonResponse($data);
        }
        return new Response("Erreur : ceci n'est pas une requête Ajax");


    }
    public function attack(Pokemon $attaquant, Pokemon $cible)
    {
        $repository = $this->getDoctrine()->getRepository(Pokemon::class);
        $dégat = $attaquant->getAttack() - $cible->getDefense();
        if ($dégat < 0) {
            $dégat = 10;
        }
        if ($dégat < 10) {
            $dégat = 20;
        }
        $result = $cible->getLife() - $dégat;
        $cible->setLife($result);
        return array("result" => $result);

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