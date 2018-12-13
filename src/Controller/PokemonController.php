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
        $repository = $this->getDoctrine()->getRepository(Pokemon::class);
        //$pokemon = $repository->findByNumberPokedex(rand(3,9));
        $arrayPokemon = array();
        for($i = 0; $i<6; $i++) {
            $pokemons = $repository->findTeamByNumberPokedex(rand(1, 9));
            array_push($arrayPokemon, $pokemons[0]);
        }

        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'pokemons' => $arrayPokemon
        ]);
    }

    public function fight()
    {

    }

    public function generateTeam()
    {

    }

    public function turn()
    {

    }

    public function attack()
    {

    }

    public function calculDamage()
    {

    }

    public function pokemonKo()
    {

    }

    public function playerVictory()
    {

    }

    public function enemyVictory()
    {

    }

    public function votePokemon()
    {

    }

}
