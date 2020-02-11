<?php

namespace ElitBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class applicationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder  ->add('idrendezvous',EntityType::class,array('class'=>'ElitBundle:rendezvous','choice_label'=>'id'))
            ->add('nom',EntityType::class,array('class'=>'ElitBundle:rendezvous','choice_label'=>'nom'))
            ->add('prenom')
            ->add('annee_Scolaire')
            ->add('niveau_Scolaire')
            ->add('frais')
            ->add('type_Payment')
            ->add('nombre_mois_payer')
            ->add('etat')


            ;;

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ElitBundle\Entity\application'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'elitbundle_application';
    }


}
