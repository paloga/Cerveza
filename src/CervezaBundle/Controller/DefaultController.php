<?php

namespace CervezaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CervezaBundle\Entity\Cerveza;
use CervezaBundle\Form\CervezaType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="listaCervezas")
     */
    public function cervezasAction()
    {
        $repository = $this->getDoctrine()->getRepository(Cerveza::class);
        $cervezas = $repository->findAll();
        return $this->render('CervezaBundle:Default:index.html.twig', array('cervezas' => $cervezas));
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
    /**
    * @Route("/insertar")
     */
    public function insertarCervezaAction(Request $request)
    {
      $cerveza = new Cerveza();
      $form = $this -> createForm(CervezaType::Class, $cerveza);
      $form->handleRequest($request);
      if ($form -> isSubmitted()&& $form -> isValid()){
        $cerveza = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em -> persist($cerveza);
        $em -> flush();
        return $this->redirectToRoute('listaCervezas');
      }

      /*$em = $this->getDoctrine()->getManager();

      $em -> persist($cerveza);

      $em -> flush();*/

      return $this->render('CervezaBundle:Default:insertar.html.twig', array('form' => $form -> createView()));
      //return $this->redirectToRoute('listaCervezas');
    }
    /**
    * @Route("/actualizar/{id}")
     */
    public function actualizarCervezaAction(Request $request, $id)
    {
      $em = $this->getDoctrine()->getManager();
      $cerveza = $em->getRepository(Cerveza::Class)->find($id);
      $form = $this -> createForm(CervezaType::Class, $cerveza);
      $form->handleRequest($request);
      if ($form -> isSubmitted()&& $form -> isValid()){
        $cerveza = $form->getData();
        $em -> persist($cerveza);
        $em -> flush();
        return $this->redirectToRoute('listaCervezas');
      }
      return $this->render('CervezaBundle:Default:insertar.html.twig', array('form' => $form -> createView()));

    }
}
