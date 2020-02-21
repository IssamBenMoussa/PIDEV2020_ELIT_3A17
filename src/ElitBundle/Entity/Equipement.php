<?php

namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\EquipementRepository")
 */
class Equipement
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
     * @ORM\Column(name="label", type="string", length=255)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var float
     *
     * @ORM\Column(name="qte", type="float")
     */
    private $qte;

    /**
     * @var float
     *
     * @ORM\Column(name="qte_init", type="float")
     */
    private $qteInit;

    /**
     * @return mixed
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param mixed $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    /**
     * @ORM\ManyToMany(targetEntity="ElitBundle\Entity\Event", mappedBy="equipements")
     */
    private $events;


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
     * Set label
     *
     * @param string $label
     *
     * @return Equipement
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Equipement
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set qte
     *
     * @param float $qte
     *
     * @return Equipement
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return float
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set qteInit
     *
     * @param float $qteInit
     *
     * @return Equipement
     */
    public function setQteInit($qteInit)
    {
        $this->qteInit = $qteInit;

        return $this;
    }

    /**
     * Get qteInit
     *
     * @return float
     */
    public function getQteInit()
    {
        return $this->qteInit;
    }

    /**
     * Equipement constructor.
     *
     */
    public function __construct()
    {
        $this->events = new ArrayCollection();

    }

    public function addEvent(Event $e)
    {
        $this->events[] = $e;
    }

    public function __toString()
    {
        return $this->getLabel();
    }
}

