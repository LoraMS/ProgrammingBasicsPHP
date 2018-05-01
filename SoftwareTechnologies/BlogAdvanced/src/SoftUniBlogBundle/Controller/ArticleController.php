<?php

namespace SoftUniBlogBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Entity\Tag;
use SoftUniBlogBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/article/create", name="article_create")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $tagsString = $request->get('tags');
            $tags = explode(",", $tagsString);
            $tagRepo = $this->getDoctrine()->getRepository(Tag::class);

            $tagsToSave = new ArrayCollection();
            foreach ($tags as $tagName){
                $tagName = trim($tagName);
                $tag = $tagRepo->findOneBy(['name'=>$tagName]);
                if($tag == null){
                    $tag = new Tag();
                    $tag->setName($tagName);
                    $em->persist($tag);
                }
                $tagsToSave->add($tag);
            }

            /** @var UploadedFile $file */
            $file = $article->getCoverPhoto();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            $file->move(
                $this->getParameter('articles_directory'),
                $fileName
            );

            $article->setCoverPhoto($fileName);
            $article->setTags($tagsToSave);
            $article->setAuthor($this->getUser());

            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('blog_index');
        }

        return $this->render('article/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/article/{id}", name="article_view")
     * @param $id
     * @return Response
     */
    public function viewArticle($id){
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        return $this->render('article/article.html.twig', ['article' => $article]);
    }

    /**
     * @Route("/article/edit/{id}", name="article_edit")
     * @param $id
     * @param Request $request
     * @return Response
     */
    public function editArticle(Request $request, $id){
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $tagsString = $request->get('tags');
            $tags = explode(",", $tagsString);
            $tagRepo = $this->getDoctrine()->getRepository(Tag::class);

            $tagsToSave = new ArrayCollection();
            foreach ($tags as $tagName){
                $tagName = trim($tagName);
                $tag = $tagRepo->findOneBy(['name'=>$tagName]);
                if($tag == null){
                    $tag = new Tag();
                    $tag->setName($tagName);
                    $em->persist($tag);
                }
                $tagsToSave->add($tag);
            }

//            /** @var UploadedFile $file */
//            $file = $article->getCoverPhoto();
//
//            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
//
//            $file->move(
//                $this->getParameter('articles_directory'),
//                $fileName
//            );
//
//            $article->setCoverPhoto(new File($this->getParameter('articles_directory').'/'.$article->getCoverPhoto()));
            $article->setTags($tagsToSave);

            $em->merge($article);
            $em->flush();

            return $this->redirectToRoute('blog_index');
        }

        return $this->render('article/edit.html.twig', ['article' => $article, 'form' => $form->createView()]);
    }

    /**
     * @Route("/article/delete/{id}", name="article_delete")
     * @param $id
     * @param Request $request
     * @return Response
     */
    public function deleteArticle(Request $request, $id){
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        // $form = $this->createForm(ArticleType::class, $article);

        // $form->handleRequest($request);
        // if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();

            return $this->redirectToRoute('blog_index');
        // }

        // return $this->render('article/delete.html.twig', ['article' => $article, 'form' => $form->createView()]);
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}

//      * @Security("has_role('ROLE_ADMIN')") comment to delete function