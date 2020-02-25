<?php

namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Classrooms
 *
 * @ORM\Table(name="classrooms")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\ClassroomsRepository")
 */
class Classrooms
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
     * @Assert\NotBlank(message="Name can't stay blank")
     * @Assert\Length(min="3",max="10",minMessage="Name too short",maxMessage="Name too short")
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="capacity", type="integer")
     * @Assert\NotBlank(message="Capacity can't stay blank")
     * @Assert\Range(min="20",max="40",maxMessage="Classes can't have more than 40 student",min="Classes can't have more than 40 student")
     */
    private $capacity;

    /**
     * @var string
     *
     * @ORM\Column(name="bloc", type="string", length=255)
     * @Assert\NotBlank(message="Bloc can't stay blank")
     * @Assert\Choice({"A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"},message="Bloc should be in A-Z")
     */
    private $bloc;


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
     * @return Classrooms
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
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Classrooms
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set bloc
     *
     * @param string $bloc
     *
     * @return Classrooms
     */
    public function setBloc($bloc)
    {
        $this->bloc = $bloc;

        return $this;
    }

    /**
     * Get bloc
     *
     * @return string
     */
    public function getBloc()
    {
        return $this->bloc;
    }

    public function __toString()
    {
        return $this->getName();
    }
}

