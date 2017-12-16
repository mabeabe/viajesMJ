<?php
namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SecurityController extends Controller
{
        /**
         * @Template()
         */

        public function loginAction(Request $request){
            
            $authenticationUtils = $this->get('security.authentication_utils');
            
            $error = $authenticationUtils->getLastAuthenticationError();
            
            $lastUsername = $authenticationUtils->getLastUsername();
            
            return array(
                'last_username' =>  $lastUsername,
                'error' =>  $error
            );
            
        }
}