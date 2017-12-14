<?php
namespace BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EntradaRepository extends EntityRepository{
    
    public function findLasEntradas(){
        
        return $this->getEntityManager()
        ->createQuery('SELECT e from BlogBundle:Entrada e order by e.fecha DESC')            
        ->setMaxResults(5)
        ->getArrayResult();
        
    }
}