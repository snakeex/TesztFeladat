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
            ->add('partner')
            ->add('nev')
            ->add('irsz')
            ->add('telepules')
            ->add('kozter')
            ->add('hazsz')
            ->add('telefon')
            ->add('fax')
            ->add('mobil')
            ->add('email')
            ->add('megjegyzes')
            ->add('letrehozva')
            ->add('letrehozo')
            ->add('modositva')
            ->add('modosito')
            ->add('orszag')
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
