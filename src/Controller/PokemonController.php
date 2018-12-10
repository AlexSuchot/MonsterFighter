<?php

namespace App\Controller;

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
        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController', 'pokemons' => $pokemon
        ]);
    }
}
