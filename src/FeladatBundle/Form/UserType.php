<?php

namespace FeladatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('_username','text',array(
                'attr' => array(
                'placeholder' => 'Felhasználó'
            )))
            ->add('_password','password',array(
                'attr' => array(
                'placeholder' => 'Jelszó'
            )))
            ->add('submit', 'submit', array(
                'label' => 'Belépés',
                'attr' => array(
                'title' => 'Belépés'
            )))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FeladatBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return;
    }
}
