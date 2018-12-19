<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use App\Repository;
use Doctrine\ORM\EntityRepository;

class PokedexController extends AbstractController
{
    /**
     * @Route("/pokedex", name="pokedex")
     */
    
    public function pokedex()
    {   
        $repo = $this->getDoctrine()->getRepository(Pokemon::class);
        $pokemons = $repo->research('', 'numberPokedex', 'ASC');
        $data = $this->createArray($pokemons);
        return $this->render('pokedex/pokedex.html.twig', [
            'items' => $data
        ]);
    }

    /**
     * @Route("/pokedex/{number}", name="info")
     */
    public function info($number)
    {
        $repo = $this->getDoctrine()->getRepository(Pokemon::class);
        $pokemon = $repo->findOneByNumberPokedex($number);
        $stagePokemon = array();
        $stage = array();
        $stage = $pokemon->getStage();
        for($i = 0; $i < sizeof($stage); $i++){
            $pokemonFind = $repo->findOneByName($stage[$i]);
            array_push($stagePokemon, $pokemonFind);
            
        }
        return $this->render('pokedex/info.html.twig', [
            'pokemon' => $pokemon, 'stagePokemon' => $stagePokemon
        ]);
    }

    /**
     * @Route("/search", name="search")
     */
    public function search(Request $req) {
        $keyword = $req->request->get('keyword');
        $col = $req->request->get('col');
        $order = $req->request->get('order');
        $repo = $this->getDoctrine()->getRepository(Pokemon::class);
        $pokemons = $repo->research($keyword, $col, $order);
        if ($req->isXMLHttpRequest()) {
            $data = $this->createArray($pokemons);
            return new JsonResponse($data);
        }
        return new Response("Erreur : ceci n'est pas une requête Ajax");
    }

    private function createArray($array) {
        $data = array();
        $id = 0;
        foreach ($array as $pokemon) {
            $temp = array(
                'number' => $pokemon->getNumberPokedex(),
                'name' => $pokemon->getName(),
                'type' => $pokemon->getType(),
                'life' => $pokemon->getLife(),
                'attack' => $pokemon->getAttack(),
                'defense' => $pokemon->getDefense(),
                'speed' => $pokemon->getSpeed(),
                'image' => $pokemon->getImage(),
                'icon' => $pokemon->getIcon()
                );
                $data[$id++] = $temp;
            }
        return $data;
    }
}