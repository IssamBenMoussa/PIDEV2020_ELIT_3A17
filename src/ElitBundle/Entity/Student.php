<?php
namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity
 *
 */
class Student extends User {
    /**
     * @var string
     *
     * @ORM\Column(name="Moyenne", type="string", length=100)
     */
    private $moyenne;

    /**
     * Student constructor.
     * @param string $moyenne
     */
    public function __construct()
    {
        parent::__construct();


    }

    /**
     * @return string
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * @param string $moyenne
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;
    }
}


?>
