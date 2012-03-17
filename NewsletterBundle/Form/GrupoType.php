<?php

namespace Jet\NewsletterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class GrupoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title',null,Array('label'=>"Título"))
            ->add('description',null,array("label"=>"Descripción",'required'=>false))
            ->add('suscribers','genemu_jquerychosen',array("label"=>"Miembros",'required'=>false,
            'class' => 'Jet\NewsletterBundle\Entity\Suscriber',
            'widget' => 'entity',
            'multiple' => true,
            'attr'=>Array(
            	'class' => 'chosen'
            )))
        ;
    }

    public function getName()
    {
        return 'jet_newsletterbundle_grupotype';
    }
}
