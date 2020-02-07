<?php
namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity
 *
 */
class Student extends User {


    /**
     * Student constructor.
     * @param string $moyenne
     */
    public function __construct()
    {
        parent::__construct();


    }

}


?>
