<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\ServiceProvider
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ServiceProvider
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $head
     *
     * @ORM\Column(name="head", type="string", length=255)
     */
    private $head;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set head
     *
     * @param string $head
     */
    public function setHead($head)
    {
        $this->head = $head;
    }

    /**
     * Get head
     *
     * @return string 
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}