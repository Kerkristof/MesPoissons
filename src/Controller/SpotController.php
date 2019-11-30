<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectManager;
use App\Repository\SiteRepository;
use App\Repository\SpotRepository;
use App\Form\SpotType;
use App\Form\FormSiteType;
use App\Entity\Spot;
use App\Entity\Site;

class SpotController extends AbstractController
{
    /**
     * @Route("/spot", name="spot")
     */
    public function index()
    {
        return $this->render('spot/index.html.twig', [
            'controller_name' => 'SpotController',
        ]);
    }

    /**
     * [create description]
     * @param  [Type]           $site_id     [description]
     * @param  [Type]         $spot_id      [description]
     * @param  Request        $request   [description]
     * @param  ObjectManager  $manager   [description]
     * @param  SiteRepository $site_repo [description]
     * @Route("/spot/{site_id}/new", name="spot_create")
     * @Route("/spot/{site_id}/{spot_id}/edit", name="spot_edit")
     * @return [type]                    [description]
     */
    public function create($site_id, $spot_id = null, Request $request, ObjectManager $manager, SiteRepository $site_repo, SpotRepository $spot_repo)
    {
      $site = $site_repo->find($site_id);
      $spot = (!$spot_id) ? new Spot() : $spot_repo->find($spot_id);
      $spot->setSite($site);
      $form = $this->createForm(SpotType::class, $spot);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid())
      {
        $manager->persist($spot);
        $manager->flush($spot);
        return $this->RedirectToRoute('site');
      }
      return $this->render('spot/spot_edit.html.twig', [
        'formspot' => $form-> createView(),
        'editMode' => $spot->getId() != null
      ]);
    }
}
