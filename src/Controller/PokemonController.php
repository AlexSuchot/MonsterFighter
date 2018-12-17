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

class PokemonController extends AbstractController
{
    /**
     * @Route("/pokemon", name="pokemon")
     */

    public function index()
    {

        //$attack = $this->attack($generateTeam[0], $generateTeam[1]);
        $generateTeam1 = $this->generateTeam();
        $generateTeam2 = $this->generateTeam();



        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'team1' => $generateTeam1, 'team2' => $generateTeam2,
            'pokemon1team1' => $generateTeam1[0], 'pokemon1team2' => $generateTeam2[0]
        ]);
    }

    public function fight()
    {

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

    public function turn()
    {

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
        $life = $cible->setLife($result);
    }

    public function calculDamage()
    {

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
