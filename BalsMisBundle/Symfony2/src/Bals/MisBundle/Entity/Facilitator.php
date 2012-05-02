<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\Facilitator
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Facilitator
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
     * @var string $Last_name
     *
     * @ORM\Column(name="Last_name", type="string", length=255)
     */
    private $Last_name;

    /**
     * @var string $First_name
     *
     * @ORM\Column(name="First_name", type="string", length=255)
     */
    private $First_name;

    /**
     * @var string $Middle_name
     *
     * @ORM\Column(name="Middle_name", type="string", length=255)
     */
    private $Middle_name;

    /**
     * @var string $Gender
     *
     * @ORM\Column(name="Gender", type="string", length=1)
     */
    private $Gender;

    /**
     * @var string $Designation
     *
     * @ORM\Column(name="Designation", type="string", length=255)
     */
    private $Designation;

    /**
     * @var string $Address
     *
     * @ORM\Column(name="Address", type="string", length=255)
     */
    private $Address;

    /**
     * @var string $Other_Employment
     *
     * @ORM\Column(name="Other_Employment", type="string", length=255)
     */
    private $Other_Employment;
    
    /**
     * @var string $Source_Of_Funds
     *
     * @ORM\Column(name="Source_Of_Funds", type="string", length=255)
     */
    private $Source_Of_Funds;


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
     * Set Last_name
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->Last_name = $lastName;
    }

    /**
     * Get Last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->Last_name;
    }

    /**
     * Set First_name
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->First_name = $firstName;
    }

    /**
     * Get First_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->First_name;
    }

    /**
     * Set Middle_name
     *
     * @param string $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->Middle_name = $middleName;
    }

    /**
     * Get Middle_name
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->Middle_name;
    }

    /**
     * Set Gender
     *
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->Gender = $gender;
    }

    /**
     * Get Gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * Set Designation
     *
     * @param string $designation
     */
    public function setDesignation($designation)
    {
        $this->Designation = $designation;
    }

    /**
     * Get Position
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->Designation;
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
     * Set Other_Employment
     *
     * @param string $otherEmployment
     */
    public function setOtherEmployment($otherEmployment)
    {
        $this->Other_Employment = $otherEmployment;
    }

    /**
     * Get Other_Employment
     *
     * @return string 
     */
    public function getOtherEmployment()
    {
        return $this->Other_Employment;
    }
    
     /**
     * Set Source_Of_Funds
     *
     * @param string $sourceOfFunds
     */
    public function setSourceOfFunds($sourceOfFunds)
    {
        $this->Source_Of_Funds = $sourceOfFunds;
    }

    /**
     * Get Other_Employment
     *
     * @return string 
     */
    public function getSourceOfFunds()
    {
        return $this->Source_Of_Funds;
    }
}