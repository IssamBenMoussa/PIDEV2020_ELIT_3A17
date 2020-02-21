<?php

namespace ElitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
            ->add('startDate', DateType::class, ['widget' => 'single_text',

                    'attr' => ['class' => 'js-datepicker'],
                    'html5'=>false,
                    'format'=>'M/d/y']

            )
            ->add('startHour')
            ->add('description')
            ->add('logo',FileType::class, [
                'label' => 'Logo Picture',
                'mapped' => false,
                'required' => false

            ])
            ->add('idClub')->add('idClassroom')->add('equipements');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ElitBundle\Entity\Event'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'elitbundle_event';
    }


}
