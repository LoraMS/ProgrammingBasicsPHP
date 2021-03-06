<?php

namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SoftUniBlogBundle\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TagController extends Controller
{
    /**
     * @Route("/tags/{name}", name="articles_in_tag")
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($name)
    {
        $tag = $this->getDoctrine()->getRepository(Tag::class)->findOneBy(['name'=>$name]);
        return $this->render('tag/article.html.twig', array('tag' => $tag));
    }
}
