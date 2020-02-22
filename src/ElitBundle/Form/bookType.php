<?php

namespace ElitBundle\Form;

use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Gregwar\CaptchaBundle\Type\CaptchaType;
class bookType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
            ->add('author' )
            ->add('description')
            ->add('imagebook',FileType::class,
                [
                    'label' => 'book image',
                    'mapped' => false,
                    'required' => false
                ])
            ->add('isbn')
            ->add('nbrbooks')
            ->add('category');
        $builder->add('captcha', CaptchaType::class);

    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ElitBundle\Entity\book'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'elitbundle_book';
    }


}
