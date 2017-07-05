<?php

namespace ModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/modelread" ,name="modelread")
     */
    public function indexAction()
    {
        return $this->render('ModelBundle:Default:index.html.twig');
    }
}
