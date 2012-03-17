<?php

namespace Jet\NewsletterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SuscriberType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name',null,Array("required"=>false,"label"=>"Nombre"))
            ->add('surname',null,array('required'=>false,'label'=>"Apellidos"))
            ->add('email',null,Array('label'=>"Correo Electrónico (requerido)"))
            ->add('phone',null,array('required'=>false,"label"=>"Teléfono"))
            ->add('address',null,array('required'=>false,"label"=>"Dirección Postal"))
            ->add('description',null,array('required'=>false,"label"=>"Descripción"))
            ->add('grupos','genemu_jquerychosen',array('required'=>false,"label"=>"Grupos",
            'class' => 'Jet\NewsletterBundle\Entity\Grupo',
            'widget' => 'entity',
            'multiple' => true))
        ;
    }

    public function getName()
    {
        return 'jet_newsletterbundle_suscribertype';
    }
}
