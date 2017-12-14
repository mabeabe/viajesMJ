<?php
namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use BlogBundle\Form\ViajeType;
use BlogBundle\Entity\Viaje;



class ViajeController extends Controller
{
    public function createAction(Request $request){
        // ...
      
        $viaje = new Viaje(null, null);
        $form = $this->createForm(ViajeType::class, $viaje);
        
        $form->handleRequest($request);
                
        
        if($form->isSubmitted() && $form->isValid()){
            
            $viaje = $form->getData();
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($viaje);
            $em->flush();
            
            return $this->redirectToRoute('entradas_viaje_show', array('id'=>$viaje->getId()));
        }
            
            return $this->render('BlogBundle:Viaje:create.html.twig', array('form' =>$form->createView()));
    }
}