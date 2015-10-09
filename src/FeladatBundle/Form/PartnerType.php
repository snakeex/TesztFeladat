<?php

namespace FeladatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PartnerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipus', 'entity', array(
                    'label' => 'Típus',
                    'class' => 'FeladatBundle:Cegtipus'
                ))
            ->add('cegnev','text', array(
                    'label' => 'Cégnév'
                ))
            ->add('nevElotag','entity', array(
                    'label' => 'Név előtag',
                    'class' => 'FeladatBundle:NevElotag'
                ))
            ->add('vezeteknev','text', array(
                    'label' => 'Vezetéknév'
                ))
            ->add('keresztnev','text', array(
                    'label' => 'Keresztnév'
                ))
            ->add('szamlazasiNev','text', array(
                    'label' => 'Számlázási név'
                ))
            ->add('partnertipus','text', array(
                    'label' => 'Partnertípus'
                ))
            ->add('email','email', array(
                    'label' => 'E-mail'
                ))
            ->add('szekhelyCimOrszag','entity', array(
                    'label' => 'Székhely cím -ország',
                    'class' => 'FeladatBundle:Countries'
                ))
            ->add('szekhelyCimIrsz','text', array(
                    'label' => 'Székhely cím -irányítószám'
                ))
            ->add('szekhelyCimTelepules','text', array(
                    'label' => 'Székhely cím -település'
                ))
            ->add('szekhelyCimKozter','text', array(
                    'label' => 'Székhely cím -közterület'
                ))
            ->add('szekhelyCimIhazsz','integer', array(
                    'label' => 'Székhely cím -házszám'
                ))
            ->add('szamlazasiCimOrszag','entity', array(
                    'label' => 'Számlázási cím -ország',
                    'class' => 'FeladatBundle:Countries'
                ))
            ->add('szamlazasiCimIrsz','text', array(
                    'label' => 'Számlázási cím -irányítószám'
                ))
            ->add('szamlazasiCimTelepules','text', array(
                    'label' => 'Számlázási cím -település'
                ))
            ->add('szamlazasiCimKozter','text', array(
                    'label' => 'Számlázási cím -közterület'
                ))
            ->add('szamlazasiCimHazsz','text', array(
                    'label' => 'Számlázási cím -házszám'
                ))
            ->add('postazasiCimOrszag','entity', array(
                    'label' => 'Postázási cím -ország',
                    'class' => 'FeladatBundle:Countries'
                ))
            ->add('postazasiCimIrsz','text', array(
                    'label' => 'Postázási cím -irányítószám'
                ))
            ->add('postazasiCimTelepules','text', array(
                    'label' => 'Postázási cím -település'
                ))
            ->add('postazasiCimKozter','text', array(
                    'label' => 'Postázási cím -közterület'
                ))
            ->add('postazasiCimHazsz','integer', array(
                    'label' => 'Postázási cím -házszám'
                ))
            ->add('adoszam','number', array(
                    'label' => 'Adószám'
                ))
            ->add('euAdoszam','text', array(
                    'label' => 'EU adószám'
                ))
            ->add('cegbejegyzesiSzam','text', array(
                    'label' => 'Cégbejegyzési szám'
                ))
            ->add('telefon','text', array(
                    'label' => 'Telefon'
                ))
            ->add('fax','text', array(
                    'label' => 'Fax'
                ))
            ->add('mobil','text', array(
                    'label' => 'Mobil'
                ))
            ->add('szuletesnap','text', array(
                    'label' => 'Születésnap'
                ))
            ->add('anyjaNeve','text', array(
                    'label' => 'Anyja neve'
                ))
            ->add('szigSzam','text', array(
                    'label' => 'Személyi igazolvány száma'
                ))
                ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FeladatBundle\Entity\Partner'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feladatbundle_partner';
    }
}
