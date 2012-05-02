<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\CLC_ServiceProviders
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CLC_ServiceProviders
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
     * @var integer $serviceprovider_id
     *
     * @ORM\Column(name="serviceprovider_id", type="integer")
     */
    private $serviceprovider_id;


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
     * Set serviceprovider_id
     *
     * @param integer $serviceproviderId
     */
    public function setServiceproviderId($serviceproviderId)
    {
        $this->serviceprovider_id = $serviceproviderId;
    }

    /**
     * Get serviceprovider_id
     *
     * @return integer 
     */
    public function getServiceproviderId()
    {
        return $this->serviceprovider_id;
    }
}