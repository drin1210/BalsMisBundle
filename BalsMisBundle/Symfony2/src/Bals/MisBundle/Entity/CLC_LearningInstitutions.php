<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\CLC_LearningInstitutions
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CLC_LearningInstitutions
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
     * @var integer $li_id
     *
     * @ORM\Column(name="li_id", type="integer")
     */
    private $li_id;


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
     * Set li_id
     *
     * @param integer $liId
     */
    public function setLiId($liId)
    {
        $this->li_id = $liId;
    }

    /**
     * Get li_id
     *
     * @return integer 
     */
    public function getLiId()
    {
        return $this->li_id;
    }
}