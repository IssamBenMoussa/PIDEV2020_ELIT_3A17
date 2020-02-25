<?php

namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\EventRepository")
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startHour", type="time")
     */
    private $startHour;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @return mixed
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * @param mixed $idClub
     */
    public function setIdClub($idClub)
    {
        $this->idClub = $idClub;
    }

    /**
 *
 *
 * @ORM\ManyToOne(targetEntity="ElitBundle\Entity\Club")
 * @ORM\JoinColumn(name="idClub",referencedColumnName="id")
 */


    private $idClub;

    /**
     * @return mixed
     */
    public function getIdClassroom()
    {
        return $this->idClassroom;
    }

    /**
     * @param mixed $idClassroom
     */
    public function setIdClassroom($idClassroom)
    {
        $this->idClassroom = $idClassroom;
    }

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="ElitBundle\Entity\Classrooms")
     * @ORM\JoinColumn(name="idClassroom",referencedColumnName="id")
     */


    private $idClassroom;


    /**
     * Many Events have Many Equipements.

     * @ORM\ManyToMany(targetEntity="ElitBundle\Entity\Equipement", inversedBy="events")
     * @ORM\JoinTable(name="events_equipements")
     */
    private $equipements;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Event
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set startHour
     *
     * @param \DateTime $startHour
     *
     * @return Event
     */
    public function setStartHour($startHour)
    {
        $this->startHour = $startHour;

        return $this;
    }

    /**
     * Get startHour
     *
     * @return \DateTime
     */
    public function getStartHour()
    {
        return $this->startHour;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Event
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }




    /**
     * Event constructor.
     *
     */
    public function __construct()
    {
        $this->equipements = new ArrayCollection();

    }

    /**
     * @return ArrayCollection
     */
    public function getEquipements()
    {
        return $this->equipements;
    }

    /**
     * @param ArrayCollection $equipements
     */
    public function setEquipements($equipements)
    {
        $this->equipements = $equipements;
    }

    public function addEquipement(Equipement $e)
    {
        $this->equipements[] = $e;
    }

}

