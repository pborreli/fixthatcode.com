<?php

namespace FTC\Bundle\AuthBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{

    /**
     * Latest Users
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getLatest($max)
    {
        $qb = $this->createQueryBuilder('u');
        $qb->orderBy('u.id', 'DESC');
        $qb->setMaxResults($max);

        return new ArrayCollection($qb->getQuery()->getResult());
    }

}