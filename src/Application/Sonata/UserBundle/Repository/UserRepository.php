<?php

namespace Application\Sonata\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;


class UserRepository extends EntityRepository
{
    public function getNonAssignedUsers()
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.player', '!=', NULL)
            ->orderBy('u.id', 'DESC');
        // ->setParameter('season', $season);

        return $qb;
    }












    public function findUserInfoBySeason($season)
    {
        //$em = $this->getDoctrine()->getManager();
        //  $season = $em->getRepository('COCBundle:Season')->getActualSeason();

        $now = new \DateTime();
        // $now = new \DateTime('Y-m-d H:i:s');
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.season = :season')
            ->orderBy('u.level', 'DESC')
         ->setParameter('season', $season);

        return $qb->getQuery()->getResult();
    }





}
