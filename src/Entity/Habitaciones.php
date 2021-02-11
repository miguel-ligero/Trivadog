<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habitaciones
 *
 * @ORM\Table(name="habitaciones", indexes={@ORM\Index(name="idHotel", columns={"idHospedaje"})})
 * @ORM\Entity(repositoryClass="App\Repository\HabitacionesRepository")
 */
class Habitaciones
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
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="numAdultos", type="integer", nullable=false)
     */
    private $numadultos;

    /**
     * @var int
     *
     * @ORM\Column(name="numInfantiles", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $numinfantiles;

    /**
     * @var int
     *
     * @ORM\Column(name="numMascotas", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $nummascotas;

    /**
     * @var float|null
     *
     * @ORM\Column(name="mediaValoracion", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $mediavaloracion = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="mediaValoracionMascotas", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $mediavaloracionmascotas = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="numComentarios", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $numcomentarios = 'NULL';

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=false)
     */
    private $precio;

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
     * @var \Hospedaje
     *
     * @ORM\ManyToOne(targetEntity="Hospedaje")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHospedaje", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idhospedaje;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNumadultos(): ?int
    {
        return $this->numadultos;
    }

    public function setNumadultos(int $numadultos): self
    {
        $this->numadultos = $numadultos;

        return $this;
    }

    public function getNuminfantiles(): ?int
    {
        return $this->numinfantiles;
    }

    public function setNuminfantiles(int $numinfantiles): self
    {
        $this->numinfantiles = $numinfantiles;

        return $this;
    }

    public function getNummascotas(): ?int
    {
        return $this->nummascotas;
    }

    public function setNummascotas(int $nummascotas): self
    {
        $this->nummascotas = $nummascotas;

        return $this;
    }

    public function getMediavaloracion(): ?float
    {
        return $this->mediavaloracion;
    }

    public function setMediavaloracion(?float $mediavaloracion): self
    {
        $this->mediavaloracion = $mediavaloracion;

        return $this;
    }

    public function getMediavaloracionmascotas(): ?float
    {
        return $this->mediavaloracionmascotas;
    }

    public function setMediavaloracionmascotas(?float $mediavaloracionmascotas): self
    {
        $this->mediavaloracionmascotas = $mediavaloracionmascotas;

        return $this;
    }

    public function getNumcomentarios(): ?int
    {
        return $this->numcomentarios;
    }

    public function setNumcomentarios(?int $numcomentarios): self
    {
        $this->numcomentarios = $numcomentarios;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

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

    public function getIdhospedaje(): ?Hospedaje
    {
        return $this->idhospedaje;
    }

    public function setIdhospedaje(?Hospedaje $idhospedaje): self
    {
        $this->idhospedaje = $idhospedaje;

        return $this;
    }

    /**
     * Transform to string
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->getNombre();
    }

}
