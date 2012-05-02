<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\LearningInstitutions
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class LearningInstitutions
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
     * @var string $Name
     *
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $Name;

    /**
     * @var string $Head
     *
     * @ORM\Column(name="Head", type="string", length=255)
     */
    private $Head;


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
     * Set Name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->Name = $name;
    }

    /**
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set Head
     *
     * @param string $head
     */
    public function setHead($head)
    {
        $this->Head = $head;
    }

    /**
     * Get Head
     *
     * @return string 
     */
    public function getHead()
    {
        return $this->Head;
    }
}