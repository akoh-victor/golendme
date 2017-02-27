<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Donation;

/**
 * ProductRepository
 */
class DonationRepository extends EntityRepository
    {



    public function findDepartmentProduct($department,$limit=null, $minPrice=null,$maxPrice=null,$gender=null,$brand=null)
    {
        $query = $this ->createQueryBuilder('l')
            ->select('p')
            ->from('AppBundle:Product','p')
            ->join('p.group', 'g')
            ->join('g.category', 'c')
            ->join('c.department', 'd')
            ->where('d = :department')
            ->setParameter('department', $department);

            if(!$minPrice == null){
                $query =  $query->andWhere('p.price >= :minPrice')
                       ->setParameter('minPrice',$minPrice);
            }
            if(!$maxPrice == null){
                $query = $query->andWhere('p.price <= :maxPrice')
                       ->setParameter('maxPrice',$maxPrice);
            }
            if(!$gender == null){
                $query = $query->andWhere('p.gender = :gender')
                       ->setParameter('gender',$gender);
            }

            if(!$brand == null){
                $query = $query->andWhere('p.brand = :brand')
                       ->setParameter('brand',$brand);
            }
        if(!$limit == null){
            $query = $query->setMaxResults($limit);
        }
        $query = $query ->getQuery()->getResult();

            return $query;

    }





    public function findIncompleteDonations($package)
    {
        return $this
            ->createQueryBuilder('l')
            ->select('d')
            ->from('AppBundle:Donation','d')
            ->where('d.package = :package')
            ->andWhere('d.complete = :incomplete')
            ->setParameter('package', $package)
            ->setParameter('incomplete', 0)
            ->orderBy('d.id', 'ASC')
            ->getQuery()
            ->getResult();
    }



    public function findToPayDonation($allowedPayment)
    {
        return $this
            ->createQueryBuilder('l')
            ->select('d')
            ->from('AppBundle:Donation','d')
            ->where('d.reserveCount < :allowedPayment')
            ->andWhere('d.paymentCount < :allowedPayment')
            ->setParameter('allowedPayment', $allowedPayment)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();
    }



    public function findParticipantDonation($participant)
    {
        return $this
            ->createQueryBuilder('l')
            ->select('d')
            ->from('AppBundle:Donation','d')
            ->where('d.participant = :participant')
            ->setParameter('participant', $participant)
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();
    }
    public function findDonationPayment($donation)
    {

        return $this ->createQueryBuilder('l')
              ->select('p')
              ->from('AppBundle:Payment','p')
              ->join('p.donation', 'd')
              ->where('d = :donation')
              ->setParameter('donation', $donation)
              ->orderBy('p.created', 'DESC')
              ->getQuery()
              ->getResult();
    }
    public function findDonationReservation($donation)
    {

        return $this ->createQueryBuilder('l')
            ->select('r')
            ->from('AppBundle:Reservation','r')
            ->join('r.donation', 'd')
            ->where('d = :donation')
            ->setParameter('donation', $donation)
            ->orderBy('r.created', 'ASC')
            ->getQuery()
            ->getResult();
    }



    public function findUserDonation($user)
    {

        return $this ->createQueryBuilder('l')
            ->select('d')
            ->from('AppBundle:Donation','d')
            ->where('d.participant = :user')
            ->andWhere('d.complete = :no')
            ->setParameter('user', $user)
            ->setParameter('no', 0)
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();

    }

}
