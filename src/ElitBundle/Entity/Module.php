<?php

namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\ModuleRepository")
 */
class Module
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_cours", type="integer")
     */
    private $nombreCours;

    /**
     * @var string
     *
     * @ORM\Column(name="disponibilite_module", type="string", length=255)
     */
    private $disponibiliteModule;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Module
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nombreCours
     *
     * @param integer $nombreCours
     *
     * @return Module
     */
    public function setNombreCours($nombreCours)
    {
        $this->nombreCours = $nombreCours;
    
        return $this;
    }

    /**
     * Get nombreCours
     *
     * @return integer
     */
    public function getNombreCours()
    {
        return $this->nombreCours;
    }

    /**
     * Set disponibiliteModule
     *
     * @param string $disponibiliteModule
     *
     * @return Module
     */
    public function setDisponibiliteModule($disponibiliteModule)
    {
        $this->disponibiliteModule = $disponibiliteModule;
    
        return $this;
    }

    /**
     * Get disponibiliteModule
     *
     * @return string
     */
    public function getDisponibiliteModule()
    {
        return $this->disponibiliteModule;
    }

    public function __toString(){

        return $this->nom;
    }
}

