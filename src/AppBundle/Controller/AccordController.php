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
        $em= $this->getDoctrine()->getmanager();
        $users = $em->getRepository('ModelBundle:Users')->findAll();
        
        return $this->json($users);
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
    public function json($data){
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer());
        $encoders = array("json" =>new \Symfony\Component\Serializer\Encoder\JsonEncoder());
        
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers,$encoders);
        $json = $serializer->serialize($data, 'json');
        
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->setContent($json);
        $response->headers->set("content-type", "application/json");
        
        return $response;
    }


}
