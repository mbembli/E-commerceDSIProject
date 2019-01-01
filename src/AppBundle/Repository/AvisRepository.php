<?php

namespace AppBundle\Repository;

/**
 * AvisRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AvisRepository extends \Doctrine\ORM\EntityRepository
{
	public function countRating($produit_id,$star)
	{
	    $qb = $this->createQueryBuilder('a')
	    ->select('count(a.id)')
	    ->where('a.stars = :st')
    	->innerJoin('a.produit', 'p')
    	->andWhere('p.id = :pid')
    	->setParameters(['st'=> $star,'pid'=> $produit_id])
	    ->getQuery()
	    ->getScalarResult();
	        return $qb[0];
	}
}
