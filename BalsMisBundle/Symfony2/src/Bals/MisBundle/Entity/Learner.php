<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\Learner
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Learner
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
     * @var string $First_Name
     *
     * @ORM\Column(name="First_Name", type="string", length=255)
     */
    private $First_Name;

    /**
     * @var string $Last_Name
     *
     * @ORM\Column(name="Last_Name", type="string", length=255)
     */
    private $Last_Name;

    /**
     * @var string $Middle_Name
     *
     * @ORM\Column(name="Middle_Name", type="string", length=255)
     */
    private $Middle_Name;

    /**
     * @var date $Birthdate
     *
     * @ORM\Column(name="Birthdate", type="date")
     */
    private $Birthdate;

    /**
     * @var string $Gender
     *
     * @ORM\Column(name="Gender", type="string", length=1)
     */
    private $Gender;

    /**
     * @var string $Household_Position
     *
     * @ORM\Column(name="Household_Position", type="string", length=255)
     */
    private $Household_Position;

    /**
     * @var string $Civil_Status
     *
     * @ORM\Column(name="Civil_Status", type="string", length=255)
     */
    private $Civil_Status;

    /**
     * @var integer $CLC_Enlisted
     *
     * @ORM\Column(name="CLC_Enlisted", type="integer")
     */
    private $CLC_Enlisted;


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
     * Set First_Name
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->First_Name = $firstName;
    }

    /**
     * Get First_Name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->First_Name;
    }

    /**
     * Set Last_Name
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->Last_Name = $lastName;
    }

    /**
     * Get Last_Name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->Last_Name;
    }

    /**
     * Set Middle_Name
     *
     * @param string $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->Middle_Name = $middleName;
    }

    /**
     * Get Middle_Name
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->Middle_Name;
    }

    /**
     * Set Birthdate
     *
     * @param date $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->Birthdate = $birthdate;
    }

    /**
     * Get Birthdate
     *
     * @return date 
     */
    public function getBirthdate()
    {
        return $this->Birthdate;
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
     * Set Household_Position
     *
     * @param string $householdPosition
     */
    public function setHouseholdPosition($householdPosition)
    {
        $this->Household_Position = $householdPosition;
    }

    /**
     * Get Household_Position
     *
     * @return string 
     */
    public function getHouseholdPosition()
    {
        return $this->Household_Position;
    }

    /**
     * Set Civil_Status
     *
     * @param string $civilStatus
     */
    public function setCivilStatus($civilStatus)
    {
        $this->Civil_Status = $civilStatus;
    }

    /**
     * Get Civil_Status
     *
     * @return string 
     */
    public function getCivilStatus()
    {
        return $this->Civil_Status;
    }

    /**
     * Set CLC_Enlisted
     *
     * @param integer $cLCEnlisted
     */
    public function setCLCEnlisted($cLCEnlisted)
    {
        $this->CLC_Enlisted = $cLCEnlisted;
    }

    /**
     * Get CLC_Enlisted
     *
     * @return integer 
     */
    public function getCLCEnlisted()
    {
        return $this->CLC_Enlisted;
    }
}