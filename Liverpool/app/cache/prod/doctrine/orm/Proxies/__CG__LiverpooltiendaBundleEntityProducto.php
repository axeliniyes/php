<?php

namespace Proxies\__CG__\Liverpool\tiendaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Producto extends \Liverpool\tiendaBundle\Entity\Producto implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'idproducto', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'codigo', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'nombre', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'descripcion', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'imagen', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'preciocompra', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'precioventa', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'existencia', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'stockminimo', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'estado', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'idcategoria'];
        }

        return ['__isInitialized__', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'idproducto', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'codigo', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'nombre', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'descripcion', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'imagen', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'preciocompra', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'precioventa', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'existencia', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'stockminimo', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'estado', '' . "\0" . 'Liverpool\\tiendaBundle\\Entity\\Producto' . "\0" . 'idcategoria'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Producto $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdproducto()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdproducto();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdproducto', []);

        return parent::getIdproducto();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigo($codigo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigo', [$codigo]);

        return parent::setCodigo($codigo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigo', []);

        return parent::getCodigo();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagen($imagen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagen', [$imagen]);

        return parent::setImagen($imagen);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagen', []);

        return parent::getImagen();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreciocompra($preciocompra)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreciocompra', [$preciocompra]);

        return parent::setPreciocompra($preciocompra);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreciocompra()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreciocompra', []);

        return parent::getPreciocompra();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecioventa($precioventa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecioventa', [$precioventa]);

        return parent::setPrecioventa($precioventa);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecioventa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecioventa', []);

        return parent::getPrecioventa();
    }

    /**
     * {@inheritDoc}
     */
    public function setExistencia($existencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExistencia', [$existencia]);

        return parent::setExistencia($existencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getExistencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExistencia', []);

        return parent::getExistencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setStockminimo($stockminimo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStockminimo', [$stockminimo]);

        return parent::setStockminimo($stockminimo);
    }

    /**
     * {@inheritDoc}
     */
    public function getStockminimo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockminimo', []);

        return parent::getStockminimo();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$estado]);

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdcategoria(\Liverpool\tiendaBundle\Entity\Categoria $idcategoria = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcategoria', [$idcategoria]);

        return parent::setIdcategoria($idcategoria);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdcategoria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcategoria', []);

        return parent::getIdcategoria();
    }

}
