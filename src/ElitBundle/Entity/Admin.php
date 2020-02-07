<?php
namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;




/**
 * @ORM\Entity
 *
 */
class Admin extends User {
    /**
     * @var string
     *
     * @ORM\Column(name="privilege", type="string", length=100)
     */
    private $privilege;

    /**
     * @return string
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }

    /**
     * @param string $privilege
     */
    public function setPrivilege($privilege)
    {
        $this->privilege = $privilege;
    }


}


?>
