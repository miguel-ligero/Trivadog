<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentarioshospedaje
 *
 * @ORM\Table(name="comentarioshospedaje", indexes={@ORM\Index(name="idHabitacion", columns={"idHabitacion", "idCliente"}), @ORM\Index(name="comentariocliente", columns={"idCliente"}), @ORM\Index(name="IDX_37EB864676AD8B50", columns={"idHabitacion"})})
 * @ORM\Entity(repositoryClass="App\Repository\ComentarioshospedajeRepository")
 */
class Comentarioshospedaje
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=500, nullable=false)
     */
    private $comentario;

    /**
     * @var int|null
     *
     * @ORM\Column(name="valoracion", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $valoracion = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="valoracionMascotas", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $valoracionmascotas = NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="date", nullable=false)
     */
    private $fechacreacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo = '0';

    /**
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="id")
     * })
     */
    private $idcliente;

    /**
     * @var \Habitaciones
     *
     * @ORM\ManyToOne(targetEntity="Habitaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHabitacion", referencedColumnName="id")
     * })
     */
    private $idhabitacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComentario(): ?string
    {
        return $this->comentario;
    }

    public function setComentario(string $comentario): self
    {
        $this->comentario = $comentario;

        return $this;
    }

    public function getValoracion(): ?int
    {
        return $this->valoracion;
    }

    public function setValoracion(?int $valoracion): self
    {
        $this->valoracion = $valoracion;

        return $this;
    }

    public function getValoracionmascotas(): ?int
    {
        return $this->valoracionmascotas;
    }

    public function setValoracionmascotas(?int $valoracionmascotas): self
    {
        $this->valoracionmascotas = $valoracionmascotas;

        return $this;
    }

    public function getFechacreacion(): ?\DateTimeInterface
    {
        return $this->fechacreacion;
    }

    public function setFechacreacion(\DateTimeInterface $fechacreacion): self
    {
        $this->fechacreacion = $fechacreacion;

        return $this;
    }

    public function getActivo(): ?bool
    {
        return $this->activo;
    }

    public function setActivo(bool $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getIdcliente(): ?Clientes
    {
        return $this->idcliente;
    }

    public function setIdcliente(?Clientes $idcliente): self
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    public function getIdhabitacion(): ?Habitaciones
    {
        return $this->idhabitacion;
    }

    public function setIdhabitacion(?Habitaciones $idhabitacion): self
    {
        $this->idhabitacion = $idhabitacion;

        return $this;
    }

    

}
