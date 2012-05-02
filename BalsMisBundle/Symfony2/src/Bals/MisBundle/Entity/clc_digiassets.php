<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\clc_digiassets
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class clc_digiassets
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
     * @var integer $digiassets_id
     *
     * @ORM\Column(name="digiassets_id", type="integer")
     */
    private $digiassets_id;


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
     * Set digiassets_id
     *
     * @param integer $digiassetsId
     */
    public function setDigiassetsId($digiassetsId)
    {
        $this->digiassets_id = $digiassetsId;
    }

    /**
     * Get digiassets_id
     *
     * @return integer 
     */
    public function getDigiassetsId()
    {
        return $this->digiassets_id;
    }
}