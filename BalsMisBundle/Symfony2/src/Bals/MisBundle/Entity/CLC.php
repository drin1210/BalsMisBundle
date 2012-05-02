<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\CLC
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CLC
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
     * @var string $Address
     *
     * @ORM\Column(name="Address", type="string", length=255)
     */
    private $Address;

    

    /**
     * @var date $CLC_since
     *
     * @ORM\Column(name="CLC_since", type="date")
     */
    private $CLC_since;

    /**
     * @var string $Type
     *
     * @ORM\Column(name="Type", type="string", length=255)
     */
    private $Type;

    /**
     * @var string $WithFunctionalMobileLibrary
     *
     * @ORM\Column(name="WithFunctionalMobileLibrary", type="string", length=255)
     */
    private $WithFunctionalMobileLibrary;

    /**
     * @var string $Geographic_id
     *
     * @ORM\Column(name="Geographic_id", type="string", length=255)
     */
    private $Geographic_id;

    /**
     * @var string $Region
     *
     * @ORM\Column(name="Region", type="string", length=255)
     */
    private $Region;

    /**
     * @var string $Province
     *
     * @ORM\Column(name="Province", type="string", length=255)
     */
    private $Province;

    /**
     * @var string $City_municipality
     *
     * @ORM\Column(name="City_municipality", type="string", length=255)
     */
    private $City_municipality;

    /**
     * @var string $Division
     *
     * @ORM\Column(name="Division", type="string", length=255)
     */
    private $Division;

    /**
     * @var string $District
     *
     * @ORM\Column(name="District", type="string", length=255)
     */
    private $District;

    /**
     * @var string $Barangay
     *
     * @ORM\Column(name="Barangay", type="string", length=255)
     */
    private $Barangay;


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
     * Set Address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->Address = $address;
    }

    /**
     * Get Address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->Address;
    }

    

    /**
     * Set CLC_since
     *
     * @param date $cLCSince
     */
    public function setCLCSince($cLCSince)
    {
        $this->CLC_since = $cLCSince;
    }

    /**
     * Get CLC_since
     *
     * @return date 
     */
    public function getCLCSince()
    {
        return $this->CLC_since;
    }

    /**
     * Set Type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->Type = $type;
    }

    /**
     * Get Type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set WithFunctionalMobileLibrary
     *
     * @param string $withFunctionalMobileLibrary
     */
    public function setWithFunctionalMobileLibrary($withFunctionalMobileLibrary)
    {
        $this->WithFunctionalMobileLibrary = $withFunctionalMobileLibrary;
    }

    /**
     * Get WithFunctionalMobileLibrary
     *
     * @return string 
     */
    public function getWithFunctionalMobileLibrary()
    {
        return $this->WithFunctionalMobileLibrary;
    }

    /**
     * Set Geographic_id
     *
     * @param string $geographicId
     */
    public function setGeographicId($geographicId)
    {
        $this->Geographic_id = $geographicId;
    }

    /**
     * Get Geographic_id
     *
     * @return string 
     */
    public function getGeographicId()
    {
        return $this->Geographic_id;
    }

    /**
     * Set Region
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->Region = $region;
    }

    /**
     * Get Region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * Set Province
     *
     * @param string $province
     */
    public function setProvince($province)
    {
        $this->Province = $province;
    }

    /**
     * Get Province
     *
     * @return string 
     */
    public function getProvince()
    {
        return $this->Province;
    }

    /**
     * Set City_municipality
     *
     * @param string $cityMunicipality
     */
    public function setCityMunicipality($cityMunicipality)
    {
        $this->City_municipality = $cityMunicipality;
    }

    /**
     * Get City_municipality
     *
     * @return string 
     */
    public function getCityMunicipality()
    {
        return $this->City_municipality;
    }

    /**
     * Set Division
     *
     * @param string $division
     */
    public function setDivision($division)
    {
        $this->Division = $division;
    }

    /**
     * Get Division
     *
     * @return string 
     */
    public function getDivision()
    {
        return $this->Division;
    }

    /**
     * Set District
     *
     * @param string $district
     */
    public function setDistrict($district)
    {
        $this->District = $district;
    }

    /**
     * Get District
     *
     * @return string 
     */
    public function getDistrict()
    {
        return $this->District;
    }

    /**
     * Set Barangay
     *
     * @param string $barangay
     */
    public function setBarangay($barangay)
    {
        $this->Barangay = $barangay;
    }

    /**
     * Get Barangay
     *
     * @return string 
     */
    public function getBarangay()
    {
        return $this->Barangay;
    }
}