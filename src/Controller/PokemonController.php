<?php

namespace App\Controller;

use App\Classes\Trainer;
use App\Entity\Pokemon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController
{
    /**
     * @Route("/pokemon", name="pokemon")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Pokemon::class);
        $pokemon = $repo->findAll();
        $pokemons = $repo->find(rand(1,3));
        $trainer = new Trainer("coucou",$pokemons);


        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController', 'pokemons' => $pokemon,
            'trainer' => $trainer, 'pokemon' => $pokemons
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
