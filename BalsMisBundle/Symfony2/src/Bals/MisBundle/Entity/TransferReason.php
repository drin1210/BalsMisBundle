<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\TransferReason
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TransferReason
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
     * @var text $Reason
     *
     * @ORM\Column(name="Reason", type="text")
     */
    private $Reason;

    /**
     * @var integer $clc_from
     *
     * @ORM\Column(name="clc_from", type="integer")
     */
    private $clc_from;

    /**
     * @var integer $clc_to
     *
     * @ORM\Column(name="clc_to", type="integer")
     */
    private $clc_to;


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
     * Set Reason
     *
     * @param text $reason
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;
    }

    /**
     * Get Reason
     *
     * @return text 
     */
    public function getReason()
    {
        return $this->Reason;
    }

    /**
     * Set clc_from
     *
     * @param integer $clcFrom
     */
    public function setClcFrom($clcFrom)
    {
        $this->clc_from = $clcFrom;
    }

    /**
     * Get clc_from
     *
     * @return integer 
     */
    public function getClcFrom()
    {
        return $this->clc_from;
    }

    /**
     * Set clc_to
     *
     * @param integer $clcTo
     */
    public function setClcTo($clcTo)
    {
        $this->clc_to = $clcTo;
    }

    /**
     * Get clc_to
     *
     * @return integer 
     */
    public function getClcTo()
    {
        return $this->clc_to;
    }
}