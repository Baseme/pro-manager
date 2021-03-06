<?php
// src/Pmf/GameInterfaceBundle/Entity/Team.php

namespace Pmf\GameInterfaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Pmf\GameInterfaceBundle\Entity\Repository\TeamRepository")
 * @ORM\Table(name="teams")
 * 
 * @UniqueEntity(fields="name")
 */
class Team
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length="255", unique=true)
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $ABV;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $gender;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $style;
    
 	/**
 	 * @ORM\ManyToOne(targetEntity="Pmf\GameInterfaceBundle\Entity\League", inversedBy="teams")
 	 */
    protected $league;
    
    /**
     * @ORM\OneToOne(targetEntity="Pmf\UserBundle\Entity\User", inversedBy="team");
     */
    protected $user;
    

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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set ABV
     *
     * @param string $aBV
     */
    public function setABV($aBV)
    {
        $this->ABV = $aBV;
    }

    /**
     * Get ABV
     *
     * @return string 
     */
    public function getABV()
    {
        return $this->ABV;
    }

    /**
     * Set gender
     *
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set style
     *
     * @param string $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    /**
     * Get style
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set user
     *
     * @param Pmf\UserBundle\Entity\User $user
     */
    public function setUser(\Pmf\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Pmf\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set league
     *
     * @param Pmf\GameInterfaceBundle\Entity\League $league
     */
    public function setLeague(\Pmf\GameInterfaceBundle\Entity\League $league)
    {
        $this->league = $league;
    }

    /**
     * Get league
     *
     * @return Pmf\GameInterfaceBundle\Entity\League 
     */
    public function getLeague()
    {
        return $this->league;
    }
}