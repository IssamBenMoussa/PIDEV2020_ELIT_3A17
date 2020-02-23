<?php

namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Classes
 *
 * @ORM\Table(name="classes")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\ClassesRepository")
 */
class Classes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank(message="Capacity can't stay blank")
     * @Assert\Length(min="3",max="10",minMessage="Name too short",maxMessage="Name too short")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     * @Assert\Length(min="5",max="15",maxMessage="level too long",minMessage="Level too short")
     */
    private $level;

    /**

     * @ORM\ManyToOne(targetEntity="ElitBundle\Entity\Classrooms")
     * @ORM\JoinColumn(name="idClassroom",referencedColumnName="id")
     * @Assert\NotBlank(message="Choose a classe")
     */
    private $idClassroom;

    /**
     * Classes constructor.
     */
    public function __construct()
    {
    }


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
     * Set name
     *
     * @param string $name
     *
     * @return Classes
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
     * Set level
     *
     * @param string $level
     *
     * @return Classes
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

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
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }
}

