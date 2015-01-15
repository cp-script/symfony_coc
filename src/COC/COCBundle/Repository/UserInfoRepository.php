<?php

namespace COC\COCBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UserInfoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserInfoRepository extends EntityRepository
{
    public function findUserInfo()
    {
        //$em = $this->getDoctrine()->getManager();
      //  $season = $em->getRepository('COCBundle:Season')->getActualSeason();

        $now = new \DateTime();
        // $now = new \DateTime('Y-m-d H:i:s');
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            //->where('u.season = :season')
            ->orderBy('u.id', 'DESC');
           // ->setParameter('season', $season);

        return $qb->getQuery()->getResult();
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