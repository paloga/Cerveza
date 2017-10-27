<?php

namespace CervezaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CervezaBundle\Entity\Cerveza;

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
    /**
     * @Route("/cerveza/{id}")
     */
    public function cervezaAction($id)
    {
      $repository = $this->getDoctrine()->getRepository(Cerveza::class);
      $cervezas = $repository->find($id);
      return $this->render('CervezaBundle:Default:cerveza.html.twig', array('cerveza' => $cervezas));
    }
}
