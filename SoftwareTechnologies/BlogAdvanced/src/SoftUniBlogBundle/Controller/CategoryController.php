<?php

namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SoftUniBlogBundle\Entity\Category;
use SoftUniBlogBundle\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller
{
    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/category/list", name="category_list")
     */
    public function listCategories()
    {
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        return $this->render("category/list.html.twig", ['categories' => $categories]);

    }

    /**
     * @Route("/category/edit/{id}", name="category_edit")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editCategory($id, Request $request)
    {
        $category = $this->getDoctrine()->getRepository(Category::class)->find($id);
        if ($category === null) {
            return $this->redirectToRoute("category_list");
        }
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute("category_list");
        }

        return $this->render("category/edit.html.twig", ['form' => $form->createView(), 'category' => $category]);
    }

    /**
     * @Route("/category/delete/{id}", name="category_delete")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function deleteCategory($id, Request $request)
    {
        $category = $this->getDoctrine()->getRepository(Category::class)->find($id);
        if ($category === null) {
            return $this->redirectToRoute("category_list");
        }
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();
            return $this->redirectToRoute("category_list");
        }

        return $this->render("category/delete.html.twig", ['form' => $form->createView(), 'category' => $category]);
    }

    /**
     * @Route("/category/create", name="category_create")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function CreateCategory(Request $request)
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute("category_list");
        }

        return $this->render("category/create.html.twig", ['form' => $form->createView()]);
    }

    /**
     * @Route("/category/{id}/articles", name="articles_in_category")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function articlesInCategory($id)
    {
        $category = $this->getDoctrine()->getRepository(Category::class)->find($id);

        return $this->render("category/articles.html.twig", ['category' => $category]);
    }
}
