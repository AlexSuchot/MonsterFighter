<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PokedexController extends AbstractController
{
    /**
     * @Route("/pokedex", name="pokedex")
     */
    public function index()
    {
        return $this->render('pokedex/index.html.twig', [
            'controller_name' => 'PokedexController',
        ]);
    }

    /**
     * @Route("/pokedex/item", name="item_info")
     */
    public function item()
    {
        return $this->render('pokedex/item.html.twig', [
            'controller_name' => 'PokedexController',
        ]);
    }
}
