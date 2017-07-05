<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/article/{id}")
     */
    public function showPostAction($id)
    {
        return $this->render('AppBundle:Post:showPost.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/_list-posts/{max}")
     */
    public function getListAction($max)
    {
        return $this->render('AcmeBlogBundle:Post:list_posts.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Post:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Post:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Post:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/modify")
     */
    public function modifyAction()
    {
        return $this->render('AppBundle:Post:modify.html.twig', array(
            // ...
        ));
    }

}
