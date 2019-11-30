<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Repository\SiteRepository;
use App\Repository\PriseRepository;
use App\Repository\SortieCommentRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use App\Entity\Sortie;
use App\Entity\Especes;
use App\Entity\Spot;
use App\Entity\Prise;
use App\Entity\SortieComment;
use App\Form\SortieType;
use App\Form\PriseType;
use App\Form\SortieCommentType;

class SortieController extends AbstractController
{
    /**
     * [index description]
     * @Route("/sortie/{site_id}", name="sortie")
     * @param  [type]         $site_id   [description]
     * @param  SiteRepository $site_repo [description]
     * @return [type]                    [description]
     */
    public function index($site_id, SiteRepository $site_repo)
    {
        $site = $site_repo->find($site_id);
        $repo = $this->getDoctrine()->getRepository(Sortie::class);
        $sorties = $repo->findBy(['site' => $site],['createdAt' => 'DESC']);
        return $this->render('sortie/index.html.twig', [
            'sorties' => $sorties
        ]);
    }

    /**
    * @Route("/sortie/{site_id}/new", name="sortie_create")
    * @Route("/sortie/{site_id}/{id}/edit", name="sortie_edit")
    */
    public function create($site_id, Sortie $sortie = null, Request $request, ObjectManager $manager, SiteRepository $site_repo)
    {
      $site = $site_repo->find($site_id);
      if (!$sortie){$sortie = new sortie();}
      $form = $this->createForm(SortieType::class, $sortie);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid())
      {
        if(!$sortie->getId()){
          $sortie-> setCreatedAt(new \DateTime())
                 -> setSite($site)
                 -> setUser($this->getUser());
        }
        $manager->persist($sortie);
        $manager->flush($sortie);
        return $this->RedirectToRoute('sortie_show',[
          'id' => $sortie->getId()
        ]);
      }
      return $this->render('sortie/sortie_edit.html.twig', [
        'formSortie' => $form-> createView(),
        'editMode' => $sortie->getId() != null
      ]);
    }

    /**
     * [show description]
     * @Route("/sortie/{id}/show", name="sortie_show")
     * @return [type] [description]
     */
    public function show(Sortie $sortie, ObjectManager $manager, Request $request)
    {
      // AJOUT D'UNE NOUVELLE PRISE!
      $prise = new Prise();
      $prise->setSortie($sortie);

      $prise_form = $this->createForm(PriseType::class, $prise);
      
      $prise_form->handleRequest($request);
      if($prise_form->isSubmitted() && $prise_form->isValid())
      {
        $manager->persist($prise);
        $manager->flush();
      }

      // AJOUT D'UN NOUVEAU COMMENTAIRE
      $sortie_comment = new SortieComment();
      $user = $this->getUser();
      if ($user) {
        $sortie_comment->setUser($user);
      }
      $sortie_comment->setCreatedAt(new \DateTime())
              ->setSortie($sortie);
      $sortie_comment_form = $this->createForm(SortieCommentType::class, $sortie_comment);
      $sortie_comment_form->handleRequest($request);
      if($sortie_comment_form->isSubmitted() && $sortie_comment_form->isValid())
      {
        $manager->persist($sortie_comment);
        $manager->flush();
      }
      unset($sortie_comment_form);
      unset($sortie_comment);
      $sortie_comment = new SortieComment;
      $sortie_comment_form = $this->createForm(SortieCommentType::class, $sortie_comment);

      return $this->render('sortie/sortie_show.html.twig', [
        'sortie' => $sortie,
        'formPrise' => $prise_form->createView(),
        'formComment' => $sortie_comment_form->createView()
      ]);
    }

    /**
     * [sortieDelete description]
     * @Route("/sortie/{id}/delete", name="sortie_delete")
     * @param  Sortie        $sortie  [description]
     * @param  ObjectManager $manager [description]
     * @return [type]                 [description]
     */
    public function sortieDelete(Sortie $sortie, ObjectManager $manager)
    {
      $manager->remove($sortie);
      $manager->flush();
      return $this->RedirectToRoute('sortie', [
        'site_id' => $sortie->getSite()->getId()
      ]);
    }

   /**
    * [delete description]
    * @Route("/prise/{id}/delete", name="prise_delete")
    * @param  Prise         $prise   [description]
    * @param  ObjectManager $manager [description]
    * @return [type]                 [description]
    */
    public function priseDelete(Prise $prise, ObjectManager $manager, PriseRepository $repo)
    {
      $sortie = $prise->getSortie();
      $manager->remove($prise);
      $manager->flush();
      return $this->RedirectToRoute('sortie_show', [
        'id' => $sortie->getId()
      ]);
    }

}
