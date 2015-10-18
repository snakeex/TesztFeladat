<?php

namespace FeladatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TelephelyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('partner', 'entity', array(
                'label' => 'Partner',
                'required' => true,
                'class' => 'FeladatBundle:Partner',
                'placeholder' => '--Válasszon!--',
            ))
            ->add('nev', 'text', array(
                'label' => 'Név',
                'required' => true,
            ))
            ->add('orszag', 'entity', array(
                'label' => 'Ország',
                'required' => true,
                'class' => 'FeladatBundle:Countries',
                'placeholder' => '--Válasszon!--',
            ))
            ->add('irsz', 'text', array(
                'label' => 'Irányítószám',
            ))
            ->add('telepules', 'text', array(
                'label' => 'Település',
            ))
            ->add('kozter', 'text', array(
                'label' => 'Közterület',
            ))
            ->add('hazsz', 'integer', array(
                'label' => 'Házszám',
            ))
            ->add('telefon', 'text', array(
                'label' => 'Telefon',
                'required' => false,
            ))
            ->add('fax', 'text', array(
                'label' => 'Fax',
                'required' => false,
            ))
            ->add('mobil', 'text', array(
                'label' => 'Mobil',
                'required' => false,
            ))
            ->add('email', 'email', array(
                'label' => 'E-mail',
                'required' => false,
            ))
            ->add('alapertelmezett', 'checkbox', array(       
                'required' => false,
            ))
            ->add('megjegyzes', 'textarea', array(
                'label' => 'Megjegyzés',
                'required' => false,
            ))
 
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FeladatBundle\Entity\Telephely'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feladatbundle_telephely';
    }
}
