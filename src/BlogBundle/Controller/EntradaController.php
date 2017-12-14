<?php
namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use BlogBundle\Form\EntradaType;
use BlogBundle\Entity\Entrada;



class EntradaController extends Controller
{
    
    public function indexAction(Request $entrada)
    {
        // replace this example code with whatever you need
      
        return $this->getLasEntradasAction();
        
    }
    
    public function createAction(Request $request){
        // ...
        
        $entrada = new Entrada(null, null, null, null);
        $form = $this->createForm(EntradaType::class, $entrada);
        
        $form->handleRequest($request);
        
        
        if($form->isSubmitted() && $form->isValid()){
            
            $entrada = $form->getData();
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entrada);
            $em->flush();
            
            return $this->redirectToRoute('entradas_show', array('id'=>$entrada->getId()));
        }
        
        return $this->render('BlogBundle:Entrada:create.html.twig', array('form' =>$form->createView()));
    }
    
    public function getLasEntradasAction(){
        
        $logger = $this->get('logger');     
        $ip = $this->container->get('request_stack')->getMasterRequest()->getClientIp();
        $logger->error('Visita desde la IP: '.$ip);
        
        
        
        $repository = $this->getDoctrine()->getRepository('BlogBundle:Entrada');
        
        //$entradas = $repository->findLasEntradas();
        $entradas = $this->get('entradas.ultimas_entradas')->findFrom();
        
        return $this->render('BlogBundle:Entrada:ultimas.html.twig', array('entradas' => $entradas));
        
        
    }
}