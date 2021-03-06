<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ViajesController extends Controller
{
    /**
     *@Route("/viajes/europa")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('viajes/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
