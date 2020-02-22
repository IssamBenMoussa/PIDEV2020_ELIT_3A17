<?php

namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\reservationRepository")
 */
class reservation
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="booktitle", type="string", length=255)
     */
    private $booktitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datereservation", type="date")
     */
    private $datereservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datereturn", type="date")
     */
    private $datereturn;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="studentkey", type="string", length=255)
     */
    private $studentkey;


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
     * Set name
     *
     * @param string $name
     *
     * @return reservation
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return reservation
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set booktitle
     *
     * @param string $booktitle
     *
     * @return reservation
     */
    public function setBooktitle($booktitle)
    {
        $this->booktitle = $booktitle;
    
        return $this;
    }

    /**
     * Get booktitle
     *
     * @return string
     */
    public function getBooktitle()
    {
        return $this->booktitle;
    }

    /**
     * Set datereservation
     *
     * @param \DateTime $datereservation
     *
     * @return reservation
     */
    public function setDatereservation($datereservation)
    {
        $this->datereservation = $datereservation;
    
        return $this;
    }

    /**
     * Get datereservation
     *
     * @return \DateTime
     */
    public function getDatereservation()
    {
        return $this->datereservation;
    }

    /**
     * Set datereturn
     *
     * @param \DateTime $datereturn
     *
     * @return reservation
     */
    public function setDatereturn($datereturn)
    {
        $this->datereturn = $datereturn;
    
        return $this;
    }

    /**
     * Get datereturn
     *
     * @return \DateTime
     */
    public function getDatereturn()
    {
        return $this->datereturn;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return reservation
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return reservation
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set studentkey
     *
     * @param string $studentkey
     *
     * @return reservation
     */
    public function setStudentkey($studentkey)
    {
        $this->studentkey = $studentkey;
    
        return $this;
    }

    /**
     * Get studentkey
     *
     * @return string
     */
    public function getStudentkey()
    {
        return $this->studentkey;
    }
}

