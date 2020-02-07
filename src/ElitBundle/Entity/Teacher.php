<?php
namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;




/**
 * @ORM\Entity
 *
 */
class Teacher extends User {
    /**
     * @var string
     *
     * @ORM\Column(name="salary", type="string", length=100)
     */
    private $Salary;

    /**
     * @return string
     */
    public function getSalary()
    {
        return $this->Salary;
    }

    /**
     * @param string $Salary
     */
    public function setSalary($Salary)
    {
        $this->Salary = $Salary;
    }


}


?>
