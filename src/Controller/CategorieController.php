<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\CategoryType;
use App\Entity\Category;
use App\Entity\Especes;

class CategorieController extends AbstractController
{
    /**
     * @Route("/category/index", name="categorie")
     */
    public function index()
    {
      $repo = $this-> getDoctrine()->getRepository(Category::class);
      $categories = $repo->findAll();
        return $this->render('categorie/index.html.twig', [
            'categories' => $categories
        ]);
    }

    /**
    * @Route("/admin/category/new", name="category_create")
    * @Route("/admin/category/{id}/edit", name="category_edit")
    */
    public function category_edit (Category $category = null, Request $request, ObjectManager $manager)
    {
      if (!$category){$category = new Category();}
      $form = $this->createForm(CategoryType::class, $category);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid())
      {
        $manager->persist($category);
        $manager->flush($category);
        return $this->RedirectToRoute('categorie');
      }
      return $this->render('categorie/category_edit.html.twig', [
        'formCategory' => $form-> createView(),
        'editMode' => $category->getId() != null
      ]);
    }
}
