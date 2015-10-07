<?php

namespace FeladatBundle\Controller;

use FeladatBundle\Form\RegisterUserType;
use FeladatBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller {

    public function registerAction() {
        $user = new User();
        $form = $this->createForm(new RegisterUserType(), $user, array(
            'action' => $this->generateUrl('register_create')
        ));

        return $this->render(
                        'FeladatBundle:Security:register.html.twig', array('form' => $form->createView())
        );
    }

    public function createAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new RegisterUserType(), new User());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $user = $form->getData();
            $user->setSalt(uniqid(mt_rand()));

            $factory = $this->get('security.encoder_factory');

            $pwd = $user->getPassword();
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword($pwd, $user->getSalt());
            $user->setPassword($password);
            
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('login'));
        }

        return $this->render(
                       'FeladatBundle:Security:register.html.twig', array('form' => $form->createView())
        );
    }

}
