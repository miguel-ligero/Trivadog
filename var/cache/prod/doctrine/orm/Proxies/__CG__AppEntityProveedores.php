<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proveedores extends \App\Entity\Proveedores implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'telefono', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'direccion', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'poblacion', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'codigopostal', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'provincia', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'fechacreacion', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'activo', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'idperfil'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'telefono', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'direccion', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'poblacion', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'codigopostal', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'provincia', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'fechacreacion', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'activo', '' . "\0" . 'App\\Entity\\Proveedores' . "\0" . 'idperfil'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proveedores $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre(string $nombre): \App\Entity\Proveedores
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\Proveedores
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', []);

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono(string $telefono): \App\Entity\Proveedores
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', [$telefono]);

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Proveedores
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', []);

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion(string $direccion): \App\Entity\Proveedores
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', [$direccion]);

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPoblacion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoblacion', []);

        return parent::getPoblacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoblacion(string $poblacion): \App\Entity\Proveedores
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoblacion', [$poblacion]);

        return parent::setPoblacion($poblacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigopostal(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigopostal', []);

        return parent::getCodigopostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigopostal(string $codigopostal): \App\Entity\Proveedores
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigopostal', [$codigopostal]);

        return parent::setCodigopostal($codigopostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getProvincia(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProvincia', []);

        return parent::getProvincia();
    }

    /**
     * {@inheritDoc}
     */
    public function setProvincia(string $provincia): \App\Entity\Proveedores
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProvincia', [$provincia]);

        return parent::setProvincia($provincia);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechacreacion(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechacreacion', []);

        return parent::getFechacreacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechacreacion(\DateTimeInterface $fechacreacion): \App\Entity\Proveedores
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechacreacion', [$fechacreacion]);

        return parent::setFechacreacion($fechacreacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivo(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivo', []);

        return parent::getActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivo(bool $activo): \App\Entity\Proveedores
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', [$activo]);

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdperfil(): ?\App\Entity\Perfil
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdperfil', []);

        return parent::getIdperfil();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdperfil(?\App\Entity\Perfil $idperfil): \App\Entity\Proveedores
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdperfil', [$idperfil]);

        return parent::setIdperfil($idperfil);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

}
