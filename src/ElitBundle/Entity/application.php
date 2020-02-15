<?php

namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * application
 *
 * @ORM\Table(name="application")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\applicationRepository")
 */
class application
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
    public function getNiveauScolaire()
    {
        return $this->niveau_Scolaire;
    }

    /**
     * @param string $niveau_Scolaire
     */
    public function setNiveauScolaire($niveau_Scolaire)
    {
        $this->niveau_Scolaire = $niveau_Scolaire;
    }

    /**
     * @return string
     */
    public function getNombreMoisPayer()
    {
        return $this->nombre_Mois_payer;
    }

    /**
     * @param string $nombre_Mois_payer
     */
    public function setNombreMoisPayer($nombre_Mois_payer)
    {
        $this->nombre_Mois_payer = $nombre_Mois_payer;
    }

    /**
     * @return mixed
     */
    public function getIdrendezvous()
    {
        return $this->idrendezvous;
    }

    /**
     * @param mixed $idrendezvous
     */
    public function setIdrendezvous($idrendezvous)
    {
        $this->idrendezvous = $idrendezvous;
    }
    /**
     * @ORM\ManyToOne(targetEntity="ElitBundle\Entity\rendezvous")
     * @ORM\JoinColumn(name="id_rendezvous",referencedColumnName="id")
     *

     */
    private $idrendezvous;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="annee_scolaire", type="string", length=255)
     */
    private $anneeScolaire;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_scolaire", type="string", length=255)
     */
    private $niveau_Scolaire;



    /**
     * @var int
     *
     * @ORM\Column(name="frais", type="integer")
     */
    private $frais;

    /**
     * @return int
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param int $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }



    /**
     * @return string
     */
    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }

    /**
     * @param string $anneeScolaire
     */
    public function setAnneeScolaire($anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="type_payment", type="string", length=255)
     */
    private $typePayment;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_mois_payer", type="integer")
     */
    private $nombre_Mois_payer;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @return string
     */
    public function getNombreMois()
    {
        return $this->nombre_Mois;
    }

    /**
     * @param string $nombre_Mois
     */
    public function setNombreMois($nombre_Mois)
    {
        $this->nombre_Mois = $nombre_Mois;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return application
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return application
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set anneSc
     *
     * @param string $anneSc
     *
     * @return application
     */
    public function setAnneSc($anneSc)
    {
        $this->anneSc = $anneSc;

        return $this;
    }

    /**
     * Get anneSc
     *
     * @return string
     */
    public function getAnneSc()
    {
        return $this->anneSc;
    }

    /**
     * Set niveauSc
     *
     * @param string $niveauSc
     *
     * @return application
     */
    public function setNiveauSc($niveauSc)
    {
        $this->niveauSc = $niveauSc;

        return $this;
    }

    /**
     * Get niveauSc
     *
     * @return string
     */
    public function getNiveauSc()
    {
        return $this->niveauSc;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return application
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set frais
     *
     * @param integer $frais
     *
     * @return application
     */
    public function setFrais($frais)
    {
        $this->frais = $frais;

        return $this;
    }

    /**
     * Get frais
     *
     * @return int
     */
    public function getFrais()
    {
        return $this->frais;
    }

    /**
     * Set typePayment
     *
     * @param string $typePayment
     *
     * @return application
     */
    public function setTypePayment($typePayment)
    {
        $this->typePayment = $typePayment;

        return $this;
    }

    /**
     * Get typePayment
     *
     * @return string
     */
    public function getTypePayment()
    {
        return $this->typePayment;
    }

    /**
     * Set nbrMois
     *
     * @param string $nbrMois
     *
     * @return application
     */
    public function setNbrMois($nbrMois)
    {
        $this->nbrMois = $nbrMois;

        return $this;
    }

    /**
     * Get nbrMois
     *
     * @return string
     */
    public function getNbrMois()
    {
        return $this->nbrMois;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return application
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
    public function __toString()
    {
        return $this->nom;

    }
    
}

