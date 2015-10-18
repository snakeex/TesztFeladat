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
                    'class' => 'FeladatBundle:Cegtipus',
                    'required' => true,
                    'placeholder' => '--Válasszon!--',
                ))
            ->add('cegnev','text', array(
                    'label' => 'Cégnév',
                    'required' => false,
                ))
            ->add('nevElotag','entity', array(
                    'label' => 'Név előtag',
                    'class' => 'FeladatBundle:NevElotag',
                    'property' => 'nev',
                    'required' => false,
                    //'placeholder' => '--Válasszon!--',
                    'empty_data' => null,
                ))
            ->add('vezeteknev','text', array(
                    'label' => 'Vezetéknév',
                    'required' => false,
                ))
            ->add('keresztnev','text', array(
                    'label' => 'Keresztnév',
                    'required' => false,
                ))
            ->add('szamlazasiNev','text', array(
                    'label' => 'Számlázási név',
                    'required' => false,
                ))
            ->add('partnertipus','entity', array(
                    'label' => 'Partnertípus',
                    'class' => 'FeladatBundle:Partnertipus',
                    'required' => true,
                    'placeholder' => '--Válasszon!--',
                ))
            ->add('email','email', array(
                    'label' => 'E-mail',
                    'required' => false,
                ))
            ->add('szekhelyCimOrszag','entity', array(
                    'label' => 'Székhely cím -ország',
                    'class' => 'FeladatBundle:Countries',
                    'required' => true,
                    'placeholder' => '--Válasszon!--',
                ))
            ->add('szekhelyCimIrsz','text', array(
                    'label' => 'Székhely cím -irányítószám',
                    'required' => true,
                ))
            ->add('szekhelyCimTelepules','text', array(
                    'label' => 'Székhely cím -település',
                    'required' => true,
                ))
            ->add('szekhelyCimKozter','text', array(
                    'label' => 'Székhely cím -közterület',
                    'required' => true,
                ))
            ->add('szekhelyCimIhazsz','integer', array(
                    'label' => 'Székhely cím -házszám',
                    'required' => true,
                ))
            ->add('szamlazasiCimOrszag','entity', array(
                    'label' => 'Számlázási cím -ország',
                    'class' => 'FeladatBundle:Countries',
                    'required' => true,
                    'placeholder' => '--Válasszon--!',
                ))
            ->add('szamlazasiCimIrsz','text', array(
                    'label' => 'Számlázási cím -irányítószám',
                    'required' => true,
                ))
            ->add('szamlazasiCimTelepules','text', array(
                    'label' => 'Számlázási cím -település',
                    'required' => true,
                ))
            ->add('szamlazasiCimKozter','text', array(
                    'label' => 'Számlázási cím -közterület',
                    'required' => true,
                ))
            ->add('szamlazasiCimHazsz','text', array(
                    'label' => 'Számlázási cím -házszám',
                    'required' => true,
                ))
            ->add('postazasiCimOrszag','entity', array(
                    'label' => 'Postázási cím -ország',
                    'class' => 'FeladatBundle:Countries',
                    'required' => true,
                    'placeholder' => '--Válasszon!--',
                ))
            ->add('postazasiCimIrsz','text', array(
                    'label' => 'Postázási cím -irányítószám',
                    'required' => true,
                ))
            ->add('postazasiCimTelepules','text', array(
                    'label' => 'Postázási cím -település',
                    'required' => true,
                ))
            ->add('postazasiCimKozter','text', array(
                    'label' => 'Postázási cím -közterület',
                    'required' => true,
                ))
            ->add('postazasiCimHazsz','integer', array(
                    'label' => 'Postázási cím -házszám',
                    'required' => true,
                ))
            ->add('adoszam','number', array(
                    'label' => 'Adószám',
                    'required' => false,
                ))
            ->add('euAdoszam','text', array(
                    'label' => 'EU adószám',
                    'required' => false,
                ))
            ->add('cegbejegyzesiSzam','text', array(
                    'label' => 'Cégbejegyzési szám',
                    'required' => false,
                ))
            ->add('telefon','text', array(
                    'label' => 'Telefon',
                    'required' => false,
                ))
            ->add('fax','text', array(
                    'label' => 'Fax',
                    'required' => false,
                ))
            ->add('mobil','text', array(
                    'label' => 'Mobil',
                    'required' => false,
                ))
            ->add('szuletesnap','birthday', array(
                    'label' => 'Születésnap',
                    'required' => false,
                    'placeholder' => array('year' => 'Év', 'month' => 'Hónap', 'day' => 'Nap'),
                    'input' => 'timestamp',
                ))
            ->add('anyjaNeve','text', array(
                    'label' => 'Anyja neve',
                    'required' => false,
                ))
            ->add('szigSzam','text', array(
                    'label' => 'Személyi igazolvány száma',
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
