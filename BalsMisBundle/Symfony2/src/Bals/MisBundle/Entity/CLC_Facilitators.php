<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\CLC_Facilitators
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CLC_Facilitators
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
     * @var integer $facilitator_id
     *
     * @ORM\Column(name="facilitator_id", type="integer")
     */
    private $facilitator_id;


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
     * Set facilitator_id
     *
     * @param integer $facilitatorId
     */
    public function setFacilitatorId($facilitatorId)
    {
        $this->facilitator_id = $facilitatorId;
    }

    /**
     * Get facilitator_id
     *
     * @return integer 
     */
    public function getFacilitatorId()
    {
        return $this->facilitator_id;
    }
}