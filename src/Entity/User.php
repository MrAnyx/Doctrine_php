<?php

namespace App\Entity;

use App\Entity\Group;

/**
 * @Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
    * @Id
    * @Column(type="integer", nullable=false)
    * @GeneratedValue
    */
   private $id;

    /**
     * Many Users have Many Groups.
     * @ManyToMany(targetEntity="Group", inversedBy="users")
     * @JoinTable(name="users_groups")
     */
    private $groups;

    public function __construct() {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addGroup(Group $group)
    {
        $group->addUser($this);
        $this->groups[] = $group;
    }

    public function getGroup()
    {
        return $this->groups;
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

