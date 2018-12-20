<?php
namespace App\Controller;
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

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class FightController extends AbstractController
{


    /**
     * @Route("/fight", name="fight")
     */
    public function index(SerializerInterface $serializer)
    {
        $repositoryUser = $this->getDoctrine()->getRepository(User::class);

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $player1 = $this->getUser();

        $max = $repositoryUser->findUserCount();
        $player2 = $repositoryUser->findOneById(2);

        return $this->render('fight/fight.html.twig', [
            'player1' => $player1,
            'player2' => $player2,
        ]);
    }

    /**
     * @Route("/datalist", name="datalist")
     */
    public function fightContainer(Request $request, SerializerInterface $serializer){

        $team1 = $this->generateTeam($serializer);
        $team2 = $this->generateTeam($serializer);

        if ($request->isXMLHttpRequest()) {
            $data = [$team1, $team2];
            return new JsonResponse($data);
        }
        return new Response("Erreur : ceci n'est pas une requête Ajax");
    }

    public function generateTeam(SerializerInterface $serializer)
    {
        $repositoryPokemon = $this->getDoctrine()->getRepository(Pokemon::class);
        $arrayPokemon = array();

        for ($i = 0; $i < 6; $i++) {
            $max = $repositoryPokemon->findPokemonCount();
            // var_dump($max);
            $pokemon = $repositoryPokemon->findOneByNumberPokedex(rand(1,12));
            $jsonPokemon = $serializer->serialize($pokemon, 'json');
            array_push($arrayPokemon, $jsonPokemon);
        }
        return $arrayPokemon;
    }
}