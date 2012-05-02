<?php

namespace Bals\MisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bals\MisBundle\Entity\AcademicProfile
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AcademicProfile
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
     * @var integer $Learners_id
     *
     * @ORM\Column(name="Learners_id", type="integer")
     */
    private $Learners_id;

    /**
     * @var string $Program_name
     *
     * @ORM\Column(name="Program_name", type="string", length=255)
     */
    private $Program_name;

    /**
     * @var string $Program_Category
     *
     * @ORM\Column(name="Program_Category", type="string", length=255)
     */
    private $Program_Category;

    /**
     * @var string $Modality
     *
     * @ORM\Column(name="Modality", type="string", length=255)
     */
    private $Modality;

    /**
     * @var string $Date_Enlisted
     *
     * @ORM\Column(name="Date_Enlisted", type="date")
     */
    private $Date_Enlisted;

    /**
     * @var integer $Assigned_Facilitator
     *
     * @ORM\Column(name="Assigned_Facilitator", type="integer")
     */
    private $Assigned_Facilitator;

    /**
     * @var string $Score
     *
     * @ORM\Column(name="Score", type="string", length=255)
     */
    private $Score;

    /**
     * @var string $Status
     *
     * @ORM\Column(name="Status", type="string", length=255)
     */
    private $Status;

    /**
     * @var string $Status_AfterProgram
     *
     * @ORM\Column(name="Status_AfterProgram", type="string", length=255)
     */
    private $Status_AfterProgram;


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
     * Set Learners_id
     *
     * @param integer $learnersId
     */
    public function setLearnersId($learnersId)
    {
        $this->Learners_id = $learnersId;
    }

    /**
     * Get Learners_id
     *
     * @return integer 
     */
    public function getLearnersId()
    {
        return $this->Learners_id;
    }

    /**
     * Set Program_name
     *
     * @param string $programName
     */
    public function setProgramName($programName)
    {
        $this->Program_name = $programName;
    }

    /**
     * Get Program_name
     *
     * @return string 
     */
    public function getProgramName()
    {
        return $this->Program_name;
    }

    /**
     * Set Program_Category
     *
     * @param string $programCategory
     */
    public function setProgramCategory($programCategory)
    {
        $this->Program_Category = $programCategory;
    }

    /**
     * Get Program_Category
     *
     * @return string 
     */
    public function getProgramCategory()
    {
        return $this->Program_Category;
    }

    /**
     * Set Modality
     *
     * @param string $modality
     */
    public function setModality($modality)
    {
        $this->Modality = $modality;
    }

    /**
     * Get Modality
     *
     * @return string 
     */
    public function getModality()
    {
        return $this->Modality;
    }

    /**
     * Set Date_Enlisted
     *
     * @param date $dateEnlisted
     */
    public function setDateEnlisted($dateEnlisted)
    {
        $this->Date_Enlisted = $dateEnlisted;
    }

    /**
     * Get Date_Enlisted
     *
     * @return date 
     */
    public function getDateEnlisted()
    {
        return $this->Date_Enlisted;
    }

    /**
     * Set Assigned_Facilitator
     *
     * @param integer $assignedFacilitator
     */
    public function setAssignedFacilitator($assignedFacilitator)
    {
        $this->Assigned_Facilitator = $assignedFacilitator;
    }

    /**
     * Get Assigned_Facilitator
     *
     * @return integer 
     */
    public function getAssignedFacilitator()
    {
        return $this->Assigned_Facilitator;
    }

    /**
     * Set Score
     *
     * @param string $score
     */
    public function setScore($score)
    {
        $this->Score = $score;
    }

    /**
     * Get Score
     *
     * @return string 
     */
    public function getScore()
    {
        return $this->Score;
    }

    /**
     * Set Status
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->Status = $status;
    }

    /**
     * Get Status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Set Status_AfterProgram
     *
     * @param string $statusAfterProgram
     */
    public function setStatusAfterProgram($statusAfterProgram)
    {
        $this->Status_AfterProgram = $statusAfterProgram;
    }

    /**
     * Get Status_AfterProgram
     *
     * @return string 
     */
    public function getStatusAfterProgram()
    {
        return $this->Status_AfterProgram;
    }
}