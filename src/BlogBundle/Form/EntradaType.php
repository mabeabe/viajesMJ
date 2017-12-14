<?php

namespace  BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EntradaType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options){
        
        $builder
        ->add('titulo', TextType::class)
        ->add('fecha', DateType::class)
        ->add('descripcion', TextareaType::class)
        ->add('viaje', TextType::class)
        ->add('save', SubmitType::class);
    }
    
    public function getName(){
        return 'entrada';
    }
    
}