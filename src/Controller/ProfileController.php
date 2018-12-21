<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function profile()
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        return $this->render('profile/profile.html.twig', [
            'controller_name' => 'ProfileController', 'user' => $user
        ]);
    }

    /**
     * @Route("/changePassword", name="changePassword")
     */
    public function changePassword(Request $request, UserPasswordEncoderInterface $encoder, UrlGeneratorInterface $urlGenerator)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $form = $this->createFormBuilder($user) 
            ->add('oldPassword', PasswordType::class, array(
                'mapped' => false
            ))
            ->add('password', PasswordType::class)
            ->add('confirmPassword', PasswordType::class)
            ->add('submit', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form-> isValid()) {

            $oldPassword = $form['oldPassword']->getData();
            // $check = $encoder->isPasswordValid($user, $oldPassword);

            // if ($check) {
                $newPassword = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($newPassword);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($user);
                $manager->flush();
                $url = $urlGenerator->generate('pokedex');
                return new RedirectResponse($url);
            // }
        }

        return $this->render('profile/changePassword.html.twig', [
            'user' => $user,
            'form' => $form->createView()
        ]);
    }
}
