<?php

namespace FeladatBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav');

        $menu->addChild('Partnerek')
                ->setAttribute('dropdown', true);
        
        $menu['Partnerek']->addChild('Partner lista', array('route' => 'partner'));
        
        $menu['Partnerek']->addChild('Új partner létrehozása', array('route' => 'partner_new'));

        $menu->addChild('Telephelyek')
                ->setAttribute('dropdown', true);
        
        $menu['Telephelyek']->addChild('Telephely lista', array('route' => 'telephely'));
        
        $menu['Telephelyek']->addChild('Új telephely létrehozása', array('route' => 'telephely_new'));
        
        $menu->addChild('Név előtagok')
                ->setAttribute('dropdown', true);
        
        $menu['Név előtagok']->addChild('Név előtag lista', array('route' => 'nevelotag'));
        
        $menu['Név előtagok']->addChild('Új név előtag létrehozása', array('route' => 'nevelotag_new'));
        
        $menu->addChild('Kijelentkezés', array('route' => 'logout'));

        return $menu;
    }
    
    

}
