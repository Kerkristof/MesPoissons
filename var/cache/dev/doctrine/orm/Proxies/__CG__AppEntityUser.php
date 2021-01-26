<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', 'confirm_password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'loves', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sorties', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sortieComments', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sites'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', 'confirm_password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'loves', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sorties', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sortieComments', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sites'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(string $username): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
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
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
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
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoves(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoves', []);

        return parent::getLoves();
    }

    /**
     * {@inheritDoc}
     */
    public function addLove(\App\Entity\Love $love): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLove', [$love]);

        return parent::addLove($love);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLove(\App\Entity\Love $love): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLove', [$love]);

        return parent::removeLove($love);
    }

    /**
     * {@inheritDoc}
     */
    public function getSorties(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSorties', []);

        return parent::getSorties();
    }

    /**
     * {@inheritDoc}
     */
    public function addSorty(\App\Entity\Sortie $sorty): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSorty', [$sorty]);

        return parent::addSorty($sorty);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSorty(\App\Entity\Sortie $sorty): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSorty', [$sorty]);

        return parent::removeSorty($sorty);
    }

    /**
     * {@inheritDoc}
     */
    public function getSortieComments(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSortieComments', []);

        return parent::getSortieComments();
    }

    /**
     * {@inheritDoc}
     */
    public function addSortieComment(\App\Entity\SortieComment $sortieComment): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSortieComment', [$sortieComment]);

        return parent::addSortieComment($sortieComment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSortieComment(\App\Entity\SortieComment $sortieComment): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSortieComment', [$sortieComment]);

        return parent::removeSortieComment($sortieComment);
    }

    /**
     * {@inheritDoc}
     */
    public function getSites(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSites', []);

        return parent::getSites();
    }

    /**
     * {@inheritDoc}
     */
    public function addSite(\App\Entity\Site $site): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSite', [$site]);

        return parent::addSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSite(\App\Entity\Site $site): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSite', [$site]);

        return parent::removeSite($site);
    }

}
