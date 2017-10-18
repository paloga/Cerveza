<?php

namespace CervezaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cerveza
 *
 * @ORM\Table(name="cerveza")
 * @ORM\Entity(repositoryClass="CervezaBundle\Repository\CervezaRepository")
 */
class Cerveza
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=255)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="poblacion", type="string", length=255)
     */
    private $poblacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var bool
     *
     * @ORM\Column(name="importancion", type="boolean")
     */
    private $importancion;

    /**
     * @var int
     *
     * @ORM\Column(name="tama�o", type="integer")
     */
    private $tamano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAlmacen", type="date")
     */
    private $fechaAlmacen;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cerveza
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Cerveza
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set poblacion
     *
     * @param string $poblacion
     *
     * @return Cerveza
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get poblacion
     *
     * @return string
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Cerveza
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set importancion
     *
     * @param boolean $importancion
     *
     * @return Cerveza
     */
    public function setImportancion($importancion)
    {
        $this->importancion = $importancion;

        return $this;
    }

    /**
     * Get importancion
     *
     * @return bool
     */
    public function getImportancion()
    {
        return $this->importancion;
    }

    /**
     * Set tama�o
     *
     * @param integer $tama�o
     *
     * @return Cerveza
     */
    public function setTama�o($tama�o)
    {
        $this->tama�o = $tama�o;

        return $this;
    }

    /**
     * Get tama�o
     *
     * @return int
     */
    public function getTama�o()
    {
        return $this->tama�o;
    }

    /**
     * Set fechaAlmacen
     *
     * @param \DateTime $fechaAlmacen
     *
     * @return Cerveza
     */
    public function setFechaAlmacen($fechaAlmacen)
    {
        $this->fechaAlmacen = $fechaAlmacen;

        return $this;
    }

    /**
     * Get fechaAlmacen
     *
     * @return \DateTime
     */
    public function getFechaAlmacen()
    {
        return $this->fechaAlmacen;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Cerveza
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Cerveza
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }
}
