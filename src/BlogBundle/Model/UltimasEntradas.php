<?php
namespace  BlogBundle\Model;

use Doctrine\Common\Persistence\ObjectManager;

class UltimasEntradas{
    
    private $repository;
    
    public function __construct(ObjectManager $om){
        $this->repository = $om->getRepository('BlogBundle:Entrada');
    }
    
    public function findFrom (){
        
        return $this->repository->findLasEntradas();
    }
}