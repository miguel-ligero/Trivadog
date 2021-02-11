<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hospedaje
 *
 * @ORM\Table(name="hospedaje", indexes={@ORM\Index(name="idProveedor", columns={"idProveedor"}), @ORM\Index(name="idTipoHospedaje", columns={"idTipoHospedaje"})})
 * @ORM\Entity(repositoryClass="App\Repository\HospedajeRepository")
 */
class Hospedaje
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=50, nullable=false)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

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
     * @var string|null
     *
     * @ORM\Column(name="admin1code", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $admin1code = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin2code", type="string", length=80, nullable=true, options={"default"="NULL"})
     */
    private $admin2code = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin3code", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $admin3code = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin4code", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $admin4code = 'NULL';

    /**
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProveedor", referencedColumnName="id")
     * })
     */
    private $idproveedor;

    /**
     * @var \Tipohospedaje
     *
     * @ORM\ManyToOne(targetEntity="Tipohospedaje")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTipoHospedaje", referencedColumnName="id")
     * })
     */
    private $idtipohospedaje;

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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getAdmin1code(): ?string
    {
        return $this->admin1code;
    }

    public function setAdmin1code(?string $admin1code): self
    {
        $this->admin1code = $admin1code;

        return $this;
    }

    public function getAdmin2code(): ?string
    {
        return $this->admin2code;
    }

    public function setAdmin2code(?string $admin2code): self
    {
        $this->admin2code = $admin2code;

        return $this;
    }

    public function getAdmin3code(): ?string
    {
        return $this->admin3code;
    }

    public function setAdmin3code(?string $admin3code): self
    {
        $this->admin3code = $admin3code;

        return $this;
    }

    public function getAdmin4code(): ?string
    {
        return $this->admin4code;
    }

    public function setAdmin4code(?string $admin4code): self
    {
        $this->admin4code = $admin4code;

        return $this;
    }

    public function getIdproveedor(): ?Clientes
    {
        return $this->idproveedor;
    }

    public function setIdproveedor(?Clientes $idproveedor): self
    {
        $this->idproveedor = $idproveedor;

        return $this;
    }

    public function getIdtipohospedaje(): ?Tipohospedaje
    {
        return $this->idtipohospedaje;
    }

    public function setIdtipohospedaje(?Tipohospedaje $idtipohospedaje): self
    {
        $this->idtipohospedaje = $idtipohospedaje;

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
