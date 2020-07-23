<?php

namespace App\Entity;

use App\Entity\User;

/** @Entity */
class Group
{
    /**
    * @Id
    * @Column(type="integer", nullable=false)
    * @GeneratedValue
    */
   private $id;

    /**
     * Many Groups have Many Users.
     * @ManyToMany(targetEntity="User", mappedBy="groups")
     */
    private $users;

    public function __construct() {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

}