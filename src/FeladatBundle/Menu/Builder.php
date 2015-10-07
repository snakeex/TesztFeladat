<?php

namespace FeladatBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav');

        $menu->addChild('Partnerek')
                ->setAttribute('dropdown', true)
                ->setAttribute('icon', 'icon-user');
        
        $menu['Partnerek']->addChild('Partner lista', array('route' => 'partner'))
                ->setAttribute('icon', 'icon-group');
        
        $menu['Partnerek']->addChild('Új partner létrehozása', array('route' => 'partner_new'))
                ->setAttribute('icon', 'icon-group');

        $menu->addChild('Telephelyek')
                ->setAttribute('dropdown', true)
                ->setAttribute('icon', 'icon-group');
        
        $menu['Telephelyek']->addChild('Telephely lista', array('route' => 'telephely'))
                ->setAttribute('icon', 'icon-group');
        
        $menu['Telephelyek']->addChild('Új telephely létrehozása', array('route' => 'telephely_new'))
                ->setAttribute('icon', 'icon-group');
        
        $menu->addChild('Név előtagok')
                ->setAttribute('dropdown', true)
                ->setAttribute('icon', 'icon-group');
        
        $menu['Név előtagok']->addChild('Név előtag lista', array('route' => 'nevelotag'))
                ->setAttribute('icon', 'icon-group');
        
        $menu['Név előtagok']->addChild('Új név előtag létrehozása', array('route' => 'nevelotag_new'))
                ->setAttribute('icon', 'icon-group');
        
        $menu->addChild('Kijelentkezés', array('route' => 'logout'))
                ->setAttribute('icon', 'icon-group');
        return $menu;
    }
    
    

}
