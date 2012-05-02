<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class BalsMisBundleEntityTransferReasonProxy extends \Bals\MisBundle\Entity\TransferReason implements \Doctrine\ORM\Proxy\Proxy
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

    public function setReason($reason)
    {
        $this->__load();
        return parent::setReason($reason);
    }

    public function getReason()
    {
        $this->__load();
        return parent::getReason();
    }

    public function setClcFrom($clcFrom)
    {
        $this->__load();
        return parent::setClcFrom($clcFrom);
    }

    public function getClcFrom()
    {
        $this->__load();
        return parent::getClcFrom();
    }

    public function setClcTo($clcTo)
    {
        $this->__load();
        return parent::setClcTo($clcTo);
    }

    public function getClcTo()
    {
        $this->__load();
        return parent::getClcTo();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'Reason', 'clc_from', 'clc_to');
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