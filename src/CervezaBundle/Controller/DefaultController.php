<?php

namespace CervezaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/algo")
     */
    public function indexAction()
    {
        return $this->render('CervezaBundle:Default:index.html.twig');
    }
    /**
     * @Route("/")
     */
    public function cervezasAction()
    {
        return $this->render('CervezaBundle:Default:cervezas.html.twig');
    }
}
