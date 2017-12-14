<?php
namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class PostController extends Controller
{
    public function showAction($id){
        // ...       
        $logger = $this->get('logger');
        $logger->info('I just got the logger');
        $logger->err('An error occurred');
        
        return $this->render('BlogBundle:Post:post.html.twig',array('id'=>$id));
        

    }
}

