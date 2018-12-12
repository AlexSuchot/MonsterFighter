<?php

namespace App\Controller;

use App\Classes\Trainer;
use App\Entity\Pokemon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PokemonRepository;

class PokemonController extends AbstractController
{
    /**
     * @Route("/pokemon", name="pokemon")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Pokemon::class);
        //$pokemons = $repo->findAll();
        $pokemon = $repo->findByNumberPokedex(rand(1,3));
        $trainer = new Trainer($pokemon,$pokemon);


        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'trainer' => $trainer, 'pokemon' => $pokemon
        ]);
    }

    public function fight (){

    }

    public function generateTeam(){

    }

    public function turn(){

    }

    public function attack(){

    }

    public function calculDamage(){

    }

    public function pokemonKo(){

    }

    public function playerVictory(){

    }

    public function enemyVictory(){

    }

    public function votePokemon(){

    }

}
