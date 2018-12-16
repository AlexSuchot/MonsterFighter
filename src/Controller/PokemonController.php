<?php

namespace App\Controller;

use App\Entity\Pokemon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
* @IsGranted("ROLE_USER")
*/
class PokemonController extends AbstractController
{
    /**
     * @Route("/pokemon", name="pokemon")
     * @IsGranted("ROLE_USER")
     */
    public function index()
    {
        $repoPokemon = $this->getDoctrine()->getRepository(Pokemon::class);
        $pokemon = $repoPokemon->findAll();

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
    
        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController', 'pokemons' => $pokemon, 'user' => $user
        ]);
    }
}
