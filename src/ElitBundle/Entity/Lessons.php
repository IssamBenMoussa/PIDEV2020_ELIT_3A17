<?php

namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Lessons
 *
 * @ORM\Table(name="lessons")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\LessonsRepository")
 * @Vich\Uploadable
 * @UniqueEntity("nomCours")
 */
class Lessons
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
     * @return string
     */
    public function getNomCours()
    {
        return $this->nomCours;
    }

    /**
     * @param string $nomCours
     */
    public function setNomCours($nomCours)
    {
        $this->nomCours = $nomCours;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cours", type="string", length=255)
     * @Assert\NotBlank
     */
    private $nomCours;

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="string", length=255)
     * @Assert\NotBlank
     */
    private $admin;

    /**
     * @return string
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param string $admin
     *
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    /**
     * @return mixed
     */
    public function getModule()
    {
        return $this->Module;
    }




    /**
     * @param mixed $Module
     */
    public function setModule($Module)
    {
        $this->Module = $Module;
    }


    /**

     * @ORM\ManyToOne(targetEntity="Module",inversedBy="Lessons")
     * @ORM\JoinColumn(name="id_Module",referencedColumnName="id")
     * @Assert\NotBlank(message="Le module doit avoir un nom")
     */
    private $Module;


    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Lesson must have a file")
     */
    private $brochureFilename;

    public function getBrochureFilename()
    {
        return $this->brochureFilename;
    }

    public function setBrochureFilename($brochureFilename)
    {
        $this->brochureFilename = $brochureFilename;

        return $this;
    }



    /**
     * @return mixed
     */
    public function getIdTeacher()
    {
        return $this->idTeacher;
    }

    /**
     * @param mixed $idTeacher
     */
    public function setIdTeacher($idTeacher)
    {
        $this->idTeacher = $idTeacher;
    }

    /**

     * @ORM\ManyToOne(targetEntity="ElitBundle\Entity\Teacher")
     * @ORM\JoinColumn(name="id_Teacher",referencedColumnName="id")
     *
     */
    private $idTeacher;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

