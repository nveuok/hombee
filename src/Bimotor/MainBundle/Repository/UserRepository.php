<?php
namespace Bimotor\MainBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function getUsers()
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u.username, u.firstName, u.lastName, u.image')
            ->getQuery()->getResult();
        return $qb;
    }
}