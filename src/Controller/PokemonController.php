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

        $repo = $this->getDoctrine()->getRepository(Pokemon::class);
        $getRepository = $this->get(PokemonRepository::class);
        //$pokemons = $repo->findAll();
        $pokemon = $getRepository->findByNumberPokedex(rand(1, 3));

        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'pokemon' => $pokemon
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
