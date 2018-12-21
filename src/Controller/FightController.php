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
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
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
        $player1Id = $player1->getId();
        $maxPlayer = $repositoryUser->findUserCount();
        $random = $player1Id;
        while($random == $player1Id){
            $random = rand(1,(int)$maxPlayer[0][1]);
        }
        $player2 = $repositoryUser->findOneById($random);

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

    /**
     * @Route("/fightfinish", name="fightfinish")
     */
    public function fightFinish(Request $request, SerializerInterface $serializer, UrlGeneratorInterface $urlGenerator){

        $repo = $this->getDoctrine()->getRepository(User::class);
        $manager = $this->getDoctrine()->getManager();

        $winner = $request->request->get('winner');
        $name1 = $request->request->get('player1');
        $name2 = $request->request->get('player2');
        $player1 = $repo->findOneByNickname($name1);
        $player2 = $repo->findOneByNickname($name2);

        if($winner  == "nowinner") {
        } else if ($winner  == "player1") {
            $win = $player1->getWin() + 1;
            $player1->setWin($win);
            $lose = $player2->getLose() + 1;
            $player2->setLose($lose);
            $manager->persist($player1);
            $manager->flush();
            $manager->persist($player2);
            $manager->flush();

        } else if ($winner  == "player2") {
            $win = $player2->getWin() + 1;
            $player2->setWin($win);
            $lose = $player1->getLose() + 1;
            $player1->setLose($lose);
            $manager->persist($player1);
            $manager->flush();
            $manager->persist($player2);
            $manager->flush();
        }
        $url = $urlGenerator->generate('fight');
        return new RedirectResponse($url);
    }

    public function generateTeam(SerializerInterface $serializer)
    {
        $repositoryPokemon = $this->getDoctrine()->getRepository(Pokemon::class);
        $arrayPokemon = array();

        for ($i = 0; $i < 6; $i++) {
            $maxPokemon = $repositoryPokemon->findPokemonCount();
            $pokemon = $repositoryPokemon->findOneByNumberPokedex(rand(1,(int)$maxPokemon[0][1]));
            $jsonPokemon = $serializer->serialize($pokemon, 'json');
            array_push($arrayPokemon, $jsonPokemon);
        }
        return $arrayPokemon;
    }
}