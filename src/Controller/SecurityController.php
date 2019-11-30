<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use App\Form\UserType;

class SecurityController extends AbstractController
{
  /**
   * @Route("/inscription", name="security_registration")
   */
  public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
  {
    $user = new User();
    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid())
    {
      $hash = $encoder->encodePassword($user, $user->getPassword());
      $user ->setPassword($hash)
            ->setRoles(["USER_ROLE"]);
      $manager->persist($user);
      $manager->flush($user);
      return $this->RedirectToRoute('security_login');
    }

    return $this->render('security/registration.html.twig',
    [
      'formRegistration' => $form->createView()
    ]);
  }

  /**
  * @Route("/connexion", name="security_login")
  */
  public function login()
  {
    return $this->render('security/login.html.twig');
  }

  /**
  * @Route("/deconnexion", name="security_logout")
  */
  public function logout()
  {
  }


}
