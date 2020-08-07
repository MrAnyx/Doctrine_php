<?php

namespace App;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Ramsey\Uuid\Uuid;

/**
 * {@inheritdoc}
 */
class IdGenerator extends AbstractIdGenerator
{
    /**
     * {@inheritdoc}
     */
    public function generate(EntityManager $em, $entity)
    {
        $uuid = Uuid::uuid4()->toString();

        if (null !== $em->getRepository(get_class($entity))->findOneBy(['id' => $uuid])) {
            $uuid = $this->generate($em, $entity);
        }

        return $uuid;
    }
}