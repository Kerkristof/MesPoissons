<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\FormSiteType;
use App\Entity\Site;

class SiteController extends AbstractController
{
    /**
     * @Route("/site", name="site")
     */
    public function index()
    {
      $repo = $this->getDoctrine()->getRepository(Site::class);
      $sites = $repo->findBy([],['category' => 'ASC','nom' => 'ASC']);
      return $this->render('site/index.html.twig', [
          'sites' => $sites
      ]);
    }

    /**
    * @Route("/site/new", name="site_create")
    * @Route("/site/{id}/edit", name="site_edit")
    */
    public function create(Site $site = null, Request $request, ObjectManager $manager)
    {
      if (!$site){
        $site = new Site();
        $site->setUser($this->getUser());
      }
      $form = $this->createForm(FormSiteType::class, $site);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid())
      {
        $manager->persist($site);
        $manager->flush($site);
        return $this->RedirectToRoute('site');
      }
      return $this->render('site/site_edit.html.twig', [
        'formSite' => $form-> createView(),
        'editMode' => $site->getId() != null
      ]);
    }

    /**
     * [show description]
     * @Route("/site/{id}/show", name="site_show")
     * @param  Site   $site [description]
     * @return [type]       [description]
     */
    public function show(Site $site)
    {
      return $this->render('site/site_show.html.twig', [
          'site' => $site
      ]);
    }

    /**
    * @Route("/site/{id}/delete", name="site_delete")
    */
    public function delete(Site $site, ObjectManager $manager)
    {
      $manager->remove($site);
      $manager->flush();
      return $this->RedirectToRoute('site');
    }

    /**
     * [testJson description]
     * @return Response [description]
     * @Route("site/test", name="site_test")
     */
    public function testJson():Response
    {
      $user = $this->getUser();

      return $this->json([
        'message' => 'reponse bien recue!',
        'user' => $user->getUsername()
      ],200);
    }
}
