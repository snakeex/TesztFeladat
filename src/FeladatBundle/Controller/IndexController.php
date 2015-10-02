<?php

namespace FeladatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();
        return $this->render('FeladatBundle:Index:index.html.twig', array(
                'user' => $user
            ));    }

}
