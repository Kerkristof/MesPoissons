<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Spot extends \App\Entity\Spot implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Spot' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Spot' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Spot' . "\0" . 'gps', '' . "\0" . 'App\\Entity\\Spot' . "\0" . 'site', '' . "\0" . 'App\\Entity\\Spot' . "\0" . 'prises'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Spot' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Spot' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Spot' . "\0" . 'gps', '' . "\0" . 'App\\Entity\\Spot' . "\0" . 'site', '' . "\0" . 'App\\Entity\\Spot' . "\0" . 'prises'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Spot $proxy) {
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Spot
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getGps(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGps', []);

        return parent::getGps();
    }

    /**
     * {@inheritDoc}
     */
    public function setGps(?string $gps): \App\Entity\Spot
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGps', [$gps]);

        return parent::setGps($gps);
    }

    /**
     * {@inheritDoc}
     */
    public function getSite(): ?\App\Entity\Site
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSite', []);

        return parent::getSite();
    }

    /**
     * {@inheritDoc}
     */
    public function setSite(?\App\Entity\Site $site): \App\Entity\Spot
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSite', [$site]);

        return parent::setSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrises(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrises', []);

        return parent::getPrises();
    }

    /**
     * {@inheritDoc}
     */
    public function addPrise(\App\Entity\Prise $prise): \App\Entity\Spot
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPrise', [$prise]);

        return parent::addPrise($prise);
    }

    /**
     * {@inheritDoc}
     */
    public function removePrise(\App\Entity\Prise $prise): \App\Entity\Spot
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePrise', [$prise]);

        return parent::removePrise($prise);
    }

}
