<?php
namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity
 *
 */
class Student extends User {


    /**

     * @ORM\ManyToOne(targetEntity="ElitBundle\Entity\Classes")
     * @ORM\JoinColumn(name="idClass",referencedColumnName="id")
     *
     */
    private $idClass;

    /**
     * @return mixed
     */
    public function getIdClass()
    {
        return $this->idClass;
    }

    /**
     * @param mixed $idClass
     */
    public function setIdClass($idClass)
    {
        $this->idClass = $idClass;
    }

    public function __toString()
    {
        return $this->getFirstname()." ".$this->getLastname();
    }

}


?>
