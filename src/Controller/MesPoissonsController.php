<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectManager;
use App\Repository\LoveRepository;
use App\Repository\EspecesRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Form\CommentType;
use App\Entity\Especes;
use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Love;

class MesPoissonsController extends AbstractController
{
    /**
     * [index description]
     * @Route("/index/{offset}", name="mes_poissons")
     * @param  EspecesRepository $repo   [description]
     * @param  [type]            $offset [description]
     * @return [type]                    [description]
     */
    public function index(EspecesRepository $repo, $offset = null)
    {
        $repo = $this->getDoctrine()->getRepository(Especes::class);
        $especes = $repo->findBy([],['category' => 'ASC', 'nom' => 'ASC']);
        $nbEspeces = count($especes);
        $nbArticleParPage = 12;
        $max = $nbEspeces - $nbEspeces % $nbArticleParPage;
        if ($offset < 0) { $offset = 0; }
        if ($offset > $max) { $offset = $max; }
        return $this->render('mes_poissons/index.html.twig', [
            'controller_name' => 'MesPoissonsController',
            'message' => 'Bienvenue sur ma page affichant la liste des espèces',
            'offset' => $offset,
            'nbVue' => $nbArticleParPage,
            'especes' => $especes
        ]);
    }

    /**
     *  @Route("/form/new", name="create")
     *  @Route("/form/{id}/edit", name="edit")
     */
    public function form(Especes $espece = null, Request $request, ObjectManager $manager)
    {
        if(!$espece){
          $espece = new Especes();
        }

        $form = $this->createFormBuilder($espece)
                     ->add('nom')
                     ->add('category', EntityType::class, [
                       'class' => Category::class,
                       'choice_label' => 'nom'
                     ])
                     ->add('taille_min')
                     ->add('contenu')
                     ->add('image')
                     ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
          if(!$espece->getId()){
            $espece-> setCreatedAt(new \DateTime())
                   -> setAuthor($this->getUser()->getUsername());
          }

          $manager->persist($espece);
          $manager->flush();

          return $this -> RedirectToRoute('mes_poissons');
        }
        return $this->render('mes_poissons/form.html.twig', [
          'formEspece' => $form->createView(),
          'editMode' => $espece->getId() != null
        ]);
    }


    /**
     * @Route("/",name="home")
     */
    public function home()
    {
        return $this->render('mes_poissons/home.html.twig',[
            'message' => 'Bienvenue sur la page d\'accueil de mon site sur les poissons mon cher '
        ]);
    }

    /**
     * @Route("form/{id}/show", name="show")
     */
    public function show(Especes $espece, ObjectManager $manager, Request $request)
    {
      $comment = new Comment();
      $form = $this->createForm(CommentType::class, $comment);

      // dump(count($espece->getComments()));
      $user = $this->getUser();
      if ($user) {
        $comment->setAuthor($user->getUsername());
      }
      $comment->setCreateAt(new \DateTime())
              ->setEspece($espece);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid())
      {
        $manager->persist($comment);
        $manager->flush();
      }
      unset($form);
      unset($comment);
      $comment = new Comment;
      $form = $this->createForm(CommentType::class, $comment);
      return $this->render('mes_poissons/show.html.twig', [
          'espece' => $espece,
          'formComment' => $form->createView()
      ]);
    }

    /**
    * @Route("/form/{id}/delete", name="espece_delete")
    */
    public function delete(Especes $espece, ObjectManager $manager)
    {
      $manager->remove($espece);
      $manager->flush();
      return $this->RedirectToRoute('mes_poissons');
    }

    /**
     * Permet de liker ou unliker une espece
     * @Route("/espece/{id}/love", name = "espece_love")
     * @param  Especes        $espece   [description]
     * @param  ObjectManager  $manager  [description]
     * @param  LoveRepository $loveRepo [description]
     * @return Response                 [description]
     */
    public function love(Especes $espece, ObjectManager $manager, LoveRepository $loveRepo) : Response
    {
      $user = $this->getUser();
      if(!$user) return $this->json([
        'code' => 403,
        'message' => "Vous devez vous connecter pour effectuer cette action"
      ], 403);

      if ($espece->isLovedByUser($user)) {
        $love = $loveRepo->findOneBy([
          'espece' => $espece,
          'user' => $user
        ]);
        $manager->remove($love);
        $manager->flush($love);
        return $this->json([
          'code' => 200,
          'message' => "Ce love a bien ete suprime",
          'loves' => $loveRepo->count(['espece' => $espece])
        ], 200);
      }

      $love = new Love();
      $love->setEspece($espece)
           ->setUser($user);
      $manager->persist($love);
      $manager->flush($love);
      return $this->json([
        'code' => 200,
        'message' => 'Ce love a bien ete ajoute a cette espece!',
        'loves' => $loveRepo->count(['espece' => $espece])
      ], 200);
    }
}
