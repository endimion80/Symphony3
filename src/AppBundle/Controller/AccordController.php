<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccordController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function listAction()
    {
        /*return $this->render('AppBundle:Accord:list.html.twig', array(
            // ...
        ));*/
        $helpers = $this->get("app.helpers");
        $em= $this->getDoctrine()->getmanager();
        $users = $em->getRepository('ModelBundle:Users')->findAll();
        
        return $helpers->json($users);
    }

    /**
     * @Route("/create", name="AccordCreate")
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
