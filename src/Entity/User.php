<?php

namespace App\Entity;

use App\Entity\Group;
use Ramsey\Uuid\UuidInterface;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity(repositoryClass="App\Repository\UserRepository")
 * @Table(name="User")
 */
class User
{
    /**
     * @var string
     *
     * @Id
     * @Column(name="id", type="string", length=36)
     * @GeneratedValue(strategy="CUSTOM")
     * @CustomIdGenerator(class="App\IdGenerator")
     */
   private $id;

    /**
     * Many Users have Many Groups.
     * @ManyToMany(targetEntity="Group", inversedBy="users")
     * @JoinTable(name="users_groups")
     */
    private $groups;

    public function __construct() {
        $this->groups = new ArrayCollection();
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

