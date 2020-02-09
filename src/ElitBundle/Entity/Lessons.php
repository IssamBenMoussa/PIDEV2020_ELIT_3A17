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
     * @var string
     *
     * @ORM\Column(name="nom_cours", type="string", length=255)
     */
    private $nomCours;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_fichiers", type="integer")
     */
    private $nombreFichiers;


    /**

     * @ORM\ManyToOne(targetEntity="ElitBundle\Entity\Module")
     * @ORM\JoinColumn(name="id_Module",referencedColumnName="id")
     *
     */
    private $idModule;

    /**
     * @return mixed
     */
    public function getIdModule()
    {
        return $this->idModule;
    }

    /**
     * @param mixed $idModule
     */
    public function setIdModule($idModule)
    {
        $this->idModule = $idModule;
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
     * @var string
     *
     * @ORM\Column(name="autres_supports", type="string", length=255)
     */
    private $autresSupports;


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
     * Set nomCours
     *
     * @param string $nomCours
     *
     * @return Lessons
     */
    public function setNomCours($nomCours)
    {
        $this->nomCours = $nomCours;
    
        return $this;
    }

    /**
     * Get nomCours
     *
     * @return string
     */
    public function getNomCours()
    {
        return $this->nomCours;
    }

    /**
     * Set nombreFichiers
     *
     * @param integer $nombreFichiers
     *
     * @return Lessons
     */
    public function setNombreFichiers($nombreFichiers)
    {
        $this->nombreFichiers = $nombreFichiers;
    
        return $this;
    }

    /**
     * Get nombreFichiers
     *
     * @return integer
     */
    public function getNombreFichiers()
    {
        return $this->nombreFichiers;
    }

    /**
     * Set autresSupports
     *
     * @param string $autresSupports
     *
     * @return Lessons
     */
    public function setAutresSupports($autresSupports)
    {
        $this->autresSupports = $autresSupports;
    
        return $this;
    }

    /**
     * Get autresSupports
     *
     * @return string
     */
    public function getAutresSupports()
    {
        return $this->autresSupports;
    }
}

