<?php

namespace ElitBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class applicationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idrendezvous',EntityType::class,array('class'=>'ElitBundle:rendezvous','choice_label'=>'id'))
            ->add('nom',EntityType::class,array('class'=>'ElitBundle:rendezvous','choice_label'=>'nom'))
            ->add('prenom')
            ->add('annee_Scolaire', ChoiceType::class, array('choices' => array(

                '2019/2020'=> '2019/2020' ,
            )))
            ->add('niveau_Scolaire' ,ChoiceType::class,array('choices'=> array(

                '1er année'=> '1er année' ,
                '2eme année'=> '2eme année' ,
                '3eme année'=> '3eme année' ,
                '4eme année'=> '4eme année' ,
            )))
            ->add('frais')
            ->add('type_Payment', ChoiceType::class , array('choices'=> array(

                'versement'=>'versement',
                'liquide'=>'liquide',
            )))
            ->add('nombre_mois_payer' ,ChoiceType::class, array('choices'=> array(
                '3 mois' => '3 mois' ,
                ' 6 mois' =>'6 mois '

            )))
            ->add('etat', ChoiceType::class,  array('choices' => array(

                'ACCEPTE'=> 'ACCEPTE' ,
                'REJETE'=> 'REJETE'
            )


            ))


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
