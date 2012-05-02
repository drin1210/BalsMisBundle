<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\RegionDivisionDistrict
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RegionDivisionDistrict
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
     * @var string $region
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var string $division
     *
     * @ORM\Column(name="division", type="string", length=255)
     */
    private $division;

    /**
     * @var string $district
     *
     * @ORM\Column(name="district", type="string", length=255)
     */
    private $district;


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
     * Set region
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set division
     *
     * @param string $division
     */
    public function setDivision($division)
    {
        $this->division = $division;
    }

    /**
     * Get division
     *
     * @return string 
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set district
     *
     * @param string $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * Get district
     *
     * @return string 
     */
    public function getDistrict()
    {
        return $this->district;
    }
}