<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\DigiAssets
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DigiAssets
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
     * @var string $Link
     *
     * @ORM\Column(name="Link", type="string", length=255)
     */
    private $Link;

    /**
     * @var text $remarks
     *
     * @ORM\Column(name="remarks", type="text")
     */
    private $remarks;


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
     * Set Link
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->Link = $link;
    }

    /**
     * Get Link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->Link;
    }

    /**
     * Set remarks
     *
     * @param text $remarks
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
    }

    /**
     * Get remarks
     *
     * @return text 
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
}