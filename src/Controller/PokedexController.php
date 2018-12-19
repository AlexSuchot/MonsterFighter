<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\File as File;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Pokemon;
use App\Entity\PokemonImage;
use App\Form\ImageType;
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
     * @Route("/edit/{number}", name="edit")
     */
    public function edit($number, Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(Pokemon::class);
        $pokemon = $repo->findOneByNumberPokedex($number);

        $form = $this->createFormBuilder($pokemon)
                     ->add('numberPokedex', TextType::class)
                     ->add('name', TextType::class)
                     ->add('type', TextType::class)
                     ->add('life', NumberType::class)
                     ->add('attack', NumberType::class)
                     ->add('defense', NumberType::class)
                     ->add('speed', NumberType::class)
                     ->add('image', FileType::class, array(
                         "mapped" => false,
                         "empty_data" => null,
                         "required" => false
                     ))
                     ->add('icon', FileType::class, array(
                         "mapped" => false,
                         "empty_data" => null,
                         "required" => false
                     ))
                     ->add('save', SubmitType::class)
                     ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pokemon->setNumberPokedex($form['numberPokedex']->getData());
            $pokemon->setName($form['name']->getData());
            $pokemon->setType($form['type']->getData());
            $pokemon->setLife($form['life']->getData());
            $pokemon->setAttack($form['attack']->getData());
            $pokemon->setDefense($form['defense']->getData());
            $pokemon->setSpeed($form['speed']->getData());

            $image = $form['image']->getData();
            if ($image !== null) {
                $imagename = $pokemon->getName().'.png';
                try {
                    $image->move(
                        $this->getParameter('images_directory'),
                        $imagename
                    );
                } catch (FileException $e) {}
                $imagepath = '../assets/images/'.$imagename;
            } else {
                $imagepath = $pokemon->getImage();
            }
            $pokemon->setImage($imagepath);
            
            $icon = $form['icon']->getData();
            if ($icon !== null) {
                $iconname = $pokemon->getName().'_icon.png';
                try {
                    $icon->move(
                    $this->getParameter('icons_directory'),
                    $iconname
                    );
                } catch (FileException $e) {}
                $iconpath = '/assets/icones/'.$iconname;
            } else {
                $iconpath = $pokemon->getIcon();
            }
            $pokemon->setIcon($iconpath);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($pokemon);
            $manager->flush();
        }

        return $this->render('pokedex/edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request)
    {
        $pokemon = new Pokemon();

        $form = $this->createFormBuilder($pokemon)
                     ->add('numberPokedex', TextType::class)
                     ->add('name', TextType::class)
                     ->add('type', TextType::class)
                     ->add('life', NumberType::class)
                     ->add('attack', NumberType::class)
                     ->add('defense', NumberType::class)
                     ->add('speed', NumberType::class)
                     ->add('image', FileType::class, array(
                         "mapped" => false,
                        ))
                     ->add('icon', FileType::class, array(
                         "mapped" => false,
                        ))
                     ->add('save', SubmitType::class)
                     ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pokemon->setNumberPokedex($form['numberPokedex']->getData());
            $pokemon->setName($form['name']->getData());
            $pokemon->setType($form['type']->getData());
            $pokemon->setLife($form['life']->getData());
            $pokemon->setAttack($form['attack']->getData());
            $pokemon->setDefense($form['defense']->getData());
            $pokemon->setSpeed($form['speed']->getData());

            $image = $form['image']->getData();
            if ($image !== null) {
                $imagename = $pokemon->getName().'.png';
                try {
                    $image->move(
                        $this->getParameter('images_directory'),
                        $imagename
                    );
                } catch (FileException $e) {}
                $imagepath = '../assets/images/'.$imagename;
            }
            $pokemon->setImage($imagepath);
            
            $icon = $form['icon']->getData();
            if ($icon !== null) {
                $iconname = $pokemon->getName().'_icon.png';
                try {
                    $icon->move(
                    $this->getParameter('icons_directory'),
                    $iconname
                    );
                } catch (FileException $e) {}
                $iconpath = '/assets/icones/'.$iconname;
            }
            $pokemon->setIcon($iconpath);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($pokemon);
            $manager->flush();
        }

        return $this->render('pokedex/add.html.twig', array(
            'form' => $form->createView(),
        ));
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
        return new Response("Error : this isn't an AJAX request");
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