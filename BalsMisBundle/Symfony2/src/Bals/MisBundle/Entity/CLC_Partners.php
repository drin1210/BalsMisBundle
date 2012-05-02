<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\CLC_Partners
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CLC_Partners
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
     * @var integer $pa_id
     *
     * @ORM\Column(name="pa_id", type="integer")
     */
    private $pa_id;


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
     * Set pa_id
     *
     * @param integer $paId
     */
    public function setPaId($paId)
    {
        $this->pa_id = $paId;
    }

    /**
     * Get pa_id
     *
     * @return integer 
     */
    public function getPaId()
    {
        return $this->pa_id;
    }
}