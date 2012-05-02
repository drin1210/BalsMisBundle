<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class BalsMisBundleEntityFacilitatorProxy extends \Bals\MisBundle\Entity\Facilitator implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setLastName($lastName)
    {
        $this->__load();
        return parent::setLastName($lastName);
    }

    public function getLastName()
    {
        $this->__load();
        return parent::getLastName();
    }

    public function setFirstName($firstName)
    {
        $this->__load();
        return parent::setFirstName($firstName);
    }

    public function getFirstName()
    {
        $this->__load();
        return parent::getFirstName();
    }

    public function setMiddleName($middleName)
    {
        $this->__load();
        return parent::setMiddleName($middleName);
    }

    public function getMiddleName()
    {
        $this->__load();
        return parent::getMiddleName();
    }

    public function setGender($gender)
    {
        $this->__load();
        return parent::setGender($gender);
    }

    public function getGender()
    {
        $this->__load();
        return parent::getGender();
    }

    public function setDesignation($designation)
    {
        $this->__load();
        return parent::setDesignation($designation);
    }

    public function getDesignation()
    {
        $this->__load();
        return parent::getDesignation();
    }

    public function setAddress($address)
    {
        $this->__load();
        return parent::setAddress($address);
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function setOtherEmployment($otherEmployment)
    {
        $this->__load();
        return parent::setOtherEmployment($otherEmployment);
    }

    public function getOtherEmployment()
    {
        $this->__load();
        return parent::getOtherEmployment();
    }

    public function setSourceOfFunds($sourceOfFunds)
    {
        $this->__load();
        return parent::setSourceOfFunds($sourceOfFunds);
    }

    public function getSourceOfFunds()
    {
        $this->__load();
        return parent::getSourceOfFunds();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'Last_name', 'First_name', 'Middle_name', 'Gender', 'Designation', 'Address', 'Other_Employment', 'Source_Of_Funds');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}