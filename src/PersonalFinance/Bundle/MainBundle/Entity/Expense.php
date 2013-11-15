<?php

namespace PersonalFinance\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expense
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Expense
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="master", type="integer")
     */
     private $master;

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
     * Set master
     *
     * @param integer $master
     * @return Expense
     */
    public function setMaster($master)
    {
        $this->master = $master;
    
        return $this;
    }

    /**
     * Get master
     *
     * @return integer 
     */
    public function getMaster()
    {
        return $this->master;
    }
}