<?php

namespace FeladatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterUserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nev_elotag', 'entity', array(
                    'class' => 'FeladatBundle:NevElotag',
                    'label' => 'Név előtag',
                    'placeholder' => '--Válasszon!--',
                    'required' => 'true',
                ))
                ->add('vezeteknev', 'text', array(
                    'label' => 'Vezetéknév'
                ))
                ->add('keresztnev', 'text', array(
                    'label' => 'Keresztnév'
                ))
                ->add('username', 'text', array(
                    'label' => 'Felhasználó név'
                ))
                ->add('password', 'password', array(
                    'label' => 'Jelszó'
                ))
                ->add('submit', 'submit', array(
                    'label' => 'Regisztrál',
                    'attr' => array(
                        'title' => 'Regisztrál'
            )))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FeladatBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'register';
    }

}
