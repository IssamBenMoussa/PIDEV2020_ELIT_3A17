<?php

namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lessons
 *
 * @ORM\Table(name="lessons")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\LessonsRepository")
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
     */
    private $nomCours;

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="string", length=255)
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
     *
     */
    private $Module;


    /**
     * @ORM\Column(type="string")
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

