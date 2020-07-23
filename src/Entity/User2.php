<?php


namespace App\Entity;

/**
 * @Entity
 */
class User2 {

   /**
    * @Id
    * @Column(type="integer")
    * @GeneratedValue
    */
   private $id;

   /**
    * @Column(type="string", length=50)
    */
   private $username;

   /**
    * @Column(type="string", length=255)
    */
   private $password;


   /**
    * Get the value of username
    */ 
   public function getUsername()
   {
      return $this->username;
   }

   /**
    * Set the value of username
    *
    * @return  self
    */ 
   public function setUsername($username)
   {
      $this->username = $username;

      return $this;
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

   /**
    * Get the value of password
    */ 
   public function getPassword()
   {
      return $this->password;
   }

   /**
    * Set the value of password
    *
    * @return  self
    */ 
   public function setPassword($password)
   {
      $this->password = $password;

      return $this;
   }
}