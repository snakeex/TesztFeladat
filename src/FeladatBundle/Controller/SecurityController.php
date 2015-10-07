<?php

namespace FeladatBundle\Controller;

use FeladatBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        
        $error = $authenticationUtils->getLastAuthenticationError();
        
        $lastUsername = $authenticationUtils->getLastUsername();
        
        return $this->render(
                        'FeladatBundle:Security:login.html.twig', array(
                    'form' => $this->createForm(new UserType())->createView(),
                    'last_username' => $lastUsername,
                    'error' => $error
        ));
    }
        
}
