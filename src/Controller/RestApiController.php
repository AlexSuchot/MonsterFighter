<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Pokemon as Pokemon;

class RestApiController extends AbstractController
{
    /**
     * @Route("/api/pokemons", methods={"GET", "HEAD"}, name="get_all")
     */
    public function getAllPokemon()
    {
        $repo = $this->getDoctrine()->getRepository(Pokemon::class);
        $pokemons = $repo->findAll();

        $data = $this->get('serializer')->serialize($pokemons, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/api/pokemon/{id}", methods={"GET", "HEAD"}, name="get_one")
     */
    public function getPokemon($id)
    {
        $repo = $this->getDoctrine()->getRepository(Pokemon::class);
        $pokemon = $repo->findOneByNumberPokedex($id);

        $data = $this->get('serializer')->serialize($pokemon, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/api/pokemons", methods={"POST"}, name="create")
     */
    public function createPokemon(Request $request)
    {
        $data = $request->getContent();
        $pokemon = $this->get('serializer')->deserialize($data, 'App\Entity\Pokemon', 'json');

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($pokemon);
        $manager->flush();

        return new Response('', Response::HTTP_CREATED);
    }

    /**
     * @Route("/api/pokemon/{id}", methods={"PUT"}, name="update")
     */
    public function updatePokemon(Request $request, $id)
    {
        $repo = $this->getDoctrine()->getRepository(Pokemon::class);
        $pokemon = $repo->findOneByNumberPokedex($id);


        if($pokemon){
            $data = $request->getContent();
            $update = $this->get('serializer')->deserialize($data, 'App\Entity\Pokemon', 'json');
            $pokemon->setName($update->getName())
                    ->setAttack($update->getAttack())
                    ->setLife($update->getLife())
                    ->setDefense($update->getDefense())
                    ->setSpeed($update->getSpeed())
                    ->setImage($update->getImage())
                    ->setIcon($update->getIcon())
                    ->setType($update->getType())
                    ->setNumberPokedex($update->getNumberPokedex());
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($pokemon);
            $manager->flush();
        }

        return new Response('', Response::HTTP_OK);
    }

    /**
     * @Route("/api/pokemon/{id}",  methods={"DELETE"}, name="delete")
     */
    public function deletePokemon(Request $request, $id)
    {
        $repo = $this->getDoctrine()->getRepository(Pokemon::class);
        $pokemon = $repo->findOneByNumberPokedex($id);
        $manager = $this->getDoctrine()->getManager();

        if($pokemon){
            $manager->remove($pokemon);
            $manager->flush();
        }
        return new Response('', Response::HTTP_OK);
    }
}
