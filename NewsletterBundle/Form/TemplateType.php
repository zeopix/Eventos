<?php

namespace Jet\NewsletterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TemplateType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('twig',null,array('attr' => array('class'=>'tinymce')))
        ;
    }

    public function getName()
    {
        return 'jet_newsletterbundle_templatetype';
    }
}
