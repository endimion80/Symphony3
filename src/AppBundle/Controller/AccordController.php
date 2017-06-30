<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccordController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Accord:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Accord:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Accord:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/change")
     */
    public function changeAction()
    {
        return $this->render('AppBundle:Accord:change.html.twig', array(
            // ...
        ));
    }

}
