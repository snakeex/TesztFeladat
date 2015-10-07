<?php

namespace FeladatBundle\Controller;

use FeladatBundle\Entity\User;
use FeladatBundle\Entity\NevElotag;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function createAction()
    {
        $admin=$this->createTestUser('Id','Adminiszt','Aladár','Admini', 'admin');
        $user1=$this->createTestUser('Ifj','User','Ubul','User1i', 'user1');
        $user2=$this->createTestUser('Prof','Felha','Ferenc','User2i', 'user2');
        $user3=$this->createTestUser('Dr','Profi','Péter','User3i', 'user3');
        
        return new Response('users created');
    }
    
     private function createTestUser($pre, $lastname, $firstname, $username, $pwd){
        $elotag = new NevElotag();
        $elotag->setNev($pre);
         
        $user = new User();
               
        $factory = $this->get('security.encoder_factory');
        
        $user->setNevElotag($elotag);
        $user->setKeresztnev($firstname);
        $user->setVezeteknev($lastname);
        $user->setUsername($username);
        $user->setSalt(uniqid(mt_rand()));

        $encoder = $factory->getEncoder($user);
        $password = $encoder->encodePassword($pwd, $user->getSalt());
        $user->setPassword($password);

        $em = $this->getDoctrine()->getManager();
        
        $em->persist($elotag);
        $em->persist($user);
        $em->flush();

        return new Response('Created user id ' . $elotag->getNev());
    }
}
