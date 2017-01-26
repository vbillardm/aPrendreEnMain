<?php

namespace AcceuilBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('title', null, array('label' => 'Titre'))
        ->add('description')
        ->add('contenu')
        ->add('path', FileType::class, array('label' => 'Photo'))
        ->add("conText", null, array('label' => 'Contexte'))
        ->add("projectTitle", null, array('label' => 'Titre du projet'))
        ->add("objectifChiffre", null, array('label' => 'Objectif financier'))
        ->add("coutProjet", null, array('label' => 'Coût du projet'))
        ->add("dateRealisation", null, array('label' => 'Date de réalisation'))
        ->add('localisation')
        ->add('quote');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AcceuilBundle\Entity\Post'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'acceuilbundle_post';
    }


}
