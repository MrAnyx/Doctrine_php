<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;
use App\Entity\User;

class UserRepository extends EntityRepository{

    public function findAll(){
        return $this->getEntityManager()
            ->createQuery('SELECT u FROM App\Entity\User u')
            ->setMaxResults(1)
            ->getResult()[0];
    }
}