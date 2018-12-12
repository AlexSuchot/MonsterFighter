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
        $pokemon = $repository->findByNumberPokedex(rand(3,9));
        $pokemons = $repository->findTeamByNumberPokedex(rand(3, 9));

        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'pokemon' => $pokemon[0], 'pokemons' => $pokemons
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
