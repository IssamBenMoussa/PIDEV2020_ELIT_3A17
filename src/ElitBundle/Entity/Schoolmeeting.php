<?php

namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schoolmeeting
 *
 * @ORM\Table(name="schoolmeeting")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\SchoolmeetingRepository")
 */
class Schoolmeeting
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @return \DateTime
     */

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startsDate", type="date")
     */
    private $startsDate;
    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="concerned", type="string", length=255)
     */
    private $concerned;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;




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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Schoolmeeting
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Schoolmeeting
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set concerned
     *
     * @param string $concerned
     *
     * @return Schoolmeeting
     */
    public function setConcerned($concerned)
    {
        $this->concerned = $concerned;

        return $this;
    }

    /**
     * Get concerned
     *
     * @return string
     */
    public function getConcerned()
    {
        return $this->concerned;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Schoolmeeting
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    public function getStartsDate()
    {
        return $this->startsDate;
    }

    /**
     * @param \DateTime $startsDate
     */
    public function setStartsDate($startsDate)
    {
        $this->startsDate = $startsDate;
    }
}

