<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
    public function changePassword(request $request, UserPasswordEncoderInterface $encoder)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();


        // $form->handleRequest($request);
        // $checkPass = $encoder->isPasswordValid($user, $user.getPassword());

        // if($form->isSubmitted() && $form-> isValid() && $user == ) {
        //     $hash = $encoder->encodePassword($user, $user->getPassword());
        //     $user->setPassword($hash);
        //     $manager->persist($user);
        //     $manager->flush();
        // }

        return $this->render('profile/changePassword.html.twig', [
            'user' => $user
        ]);
    }
}
