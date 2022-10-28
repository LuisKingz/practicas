<?php

namespace Acevedo9BBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Automovil
 *
 * @ORM\Table(name="automovil", indexes={@ORM\Index(name="usuario", columns={"usuario"})})
 * @ORM\Entity
 */
class Automovil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idautomovil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idautomovil;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=45, nullable=false)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=45, nullable=false)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=45, nullable=false)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=45, nullable=false)
     */
    private $color;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="idusuario")
     * })
     */
    private $usuario;



    /**
     * Get idautomovil
     *
     * @return integer
     */
    public function getIdautomovil()
    {
        return $this->idautomovil;
    }

    /**
     * Set marca
     *
     * @param string $marca
     *
     * @return Automovil
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Automovil
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set anio
     *
     * @param string $anio
     *
     * @return Automovil
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return string
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Automovil
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Automovil
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set usuario
     *
     * @param \Acevedo9BBundle\Entity\Usuario $usuario
     *
     * @return Automovil
     */
    public function setUsuario(\Acevedo9BBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Acevedo9BBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
