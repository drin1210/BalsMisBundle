<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\CLC_SupportingAgencies
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CLC_SupportingAgencies
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
     * @var integer $clc_id
     *
     * @ORM\Column(name="clc_id", type="integer")
     */
    private $clc_id;

    /**
     * @var integer $sa_id
     *
     * @ORM\Column(name="sa_id", type="integer")
     */
    private $sa_id;


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
     * Set clc_id
     *
     * @param integer $clcId
     */
    public function setClcId($clcId)
    {
        $this->clc_id = $clcId;
    }

    /**
     * Get clc_id
     *
     * @return integer 
     */
    public function getClcId()
    {
        return $this->clc_id;
    }

    /**
     * Set sa_id
     *
     * @param integer $saId
     */
    public function setSaId($saId)
    {
        $this->sa_id = $saId;
    }

    /**
     * Get sa_id
     *
     * @return integer 
     */
    public function getSaId()
    {
        return $this->sa_id;
    }
}