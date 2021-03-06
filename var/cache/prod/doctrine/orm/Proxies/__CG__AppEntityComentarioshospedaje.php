<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Comentarioshospedaje extends \App\Entity\Comentarioshospedaje implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'comentario', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'valoracion', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'valoracionmascotas', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'fechacreacion', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'activo', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'idcliente', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'idhabitacion'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'comentario', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'valoracion', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'valoracionmascotas', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'fechacreacion', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'activo', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'idcliente', '' . "\0" . 'App\\Entity\\Comentarioshospedaje' . "\0" . 'idhabitacion'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Comentarioshospedaje $proxy) {
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
    public function getComentario(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentario', []);

        return parent::getComentario();
    }

    /**
     * {@inheritDoc}
     */
    public function setComentario(string $comentario): \App\Entity\Comentarioshospedaje
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComentario', [$comentario]);

        return parent::setComentario($comentario);
    }

    /**
     * {@inheritDoc}
     */
    public function getValoracion(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValoracion', []);

        return parent::getValoracion();
    }

    /**
     * {@inheritDoc}
     */
    public function setValoracion(?int $valoracion): \App\Entity\Comentarioshospedaje
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValoracion', [$valoracion]);

        return parent::setValoracion($valoracion);
    }

    /**
     * {@inheritDoc}
     */
    public function getValoracionmascotas(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValoracionmascotas', []);

        return parent::getValoracionmascotas();
    }

    /**
     * {@inheritDoc}
     */
    public function setValoracionmascotas(?int $valoracionmascotas): \App\Entity\Comentarioshospedaje
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValoracionmascotas', [$valoracionmascotas]);

        return parent::setValoracionmascotas($valoracionmascotas);
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
    public function setFechacreacion(\DateTimeInterface $fechacreacion): \App\Entity\Comentarioshospedaje
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
    public function setActivo(bool $activo): \App\Entity\Comentarioshospedaje
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', [$activo]);

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdcliente(): ?\App\Entity\Clientes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcliente', []);

        return parent::getIdcliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdcliente(?\App\Entity\Clientes $idcliente): \App\Entity\Comentarioshospedaje
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcliente', [$idcliente]);

        return parent::setIdcliente($idcliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdhabitacion(): ?\App\Entity\Habitaciones
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdhabitacion', []);

        return parent::getIdhabitacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdhabitacion(?\App\Entity\Habitaciones $idhabitacion): \App\Entity\Comentarioshospedaje
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdhabitacion', [$idhabitacion]);

        return parent::setIdhabitacion($idhabitacion);
    }

}
