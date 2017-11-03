<?php

namespace CervezaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CervezaBundle\Entity\Cerveza;

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
    * @Route("/insertar/{nombre}/{pais}/{poblacion}")
     */
    public function insertarCervezaAction($nombre, $pais, $poblacion, $tipo="hjsd", $importacion=1, $tamano=2, $cantidad=2, $foto="https://www.drinkexpress.cl/wp-content/uploads/2017/07/cerveza-anchor-porter-12-oz-1000x1000.jpg")
    {
      $em = $this->getDoctrine()->getManager();

      $cerveza = new Cerveza();
      $cerveza -> setNombre($nombre);
      $cerveza -> setPais($pais);
      $cerveza -> setPoblacion($poblacion);
      $cerveza -> setTipo($tipo);
      $cerveza -> setImportancion($importacion);
      $cerveza -> setTamano($tamano);
      $cerveza -> setFechaAlmacen(\dateTime::createFromFormat("d/m/Y","10/6/2017"));
      $cerveza -> setCantidad($cantidad);
      $cerveza -> setFoto($foto);

      $em -> persist($cerveza);

      $em -> flush();

      return $this->redirectToRoute('listaCervezas');
    }
    
}
