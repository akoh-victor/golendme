<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Message;

/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TicketRepository extends EntityRepository
{
	public function findAllOrderedById() {
		return $this->getEntityManager()
			->createQuery( 'SELECT a FROM AppBundle:News a
				 ORDER BY a.id DESC' )
			->getResult();
	}

    public function findUserOpenTicket($user) {
        return $this
            ->createQueryBuilder('t')
            ->select('t')
            ->where('t.participant =:user')
            ->andWhere('t.open =:open')
            ->setParameter('user', $user)
            ->setParameter('open', 1)
            ->orderBy('t.posted', 'DESC')

            ->getQuery()
            ->getResult();
    }
	public function findRecentMessages($limit) {
		return $this
			->createQueryBuilder('a')
			->select('a')
			->where('a.posted <= :now')
			->setParameter('now', new \DateTime())
			->orderBy('a.posted', 'DESC')
			->setMaxResults($limit)
			->getQuery()
			->getResult();
	}
	public function findUnreadMessages($limit) {
		return $this
			->createQueryBuilder('a')
			->select('a')
			->where('a.view = :null')
			->setParameter('null', 0)
			->orderBy('a.id', 'DESC')
			->setMaxResults($limit)
			->getQuery()
			->getResult();
	}
	public function findRecentUnreadMessages($limit) {
		return $this
			->createQueryBuilder('a')
			->select('a')
			->where('a.posted <= :now')
			->andWhere('a.view = :null')
			->setParameter('null',0)
			->setParameter('now', new \DateTime())
			->orderBy('a.posted', 'DESC')
			->setMaxResults($limit)
			->getQuery()
			->getResult();
	}
	public function findRecentReadMessages($limit) {
		return $this
			->createQueryBuilder('a')
			->select('a')
			->where('a.posted <= :now')
			->andWhere('a.view >= :null')
			->setParameter('null',0)
			->setParameter('now', new \DateTime())
			->orderBy('a.posted', 'DESC')
			->setMaxResults($limit)
			->getQuery()
			->getResult();
	}
}
