<?php

namespace Jet\NewsletterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CampaignType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title',null,Array('label'=>"Título"))
            ->add('template',null,Array('label'=>"Plantilla"))
            ->add('head',null,Array("required"=>false, 'label'=>"Cabecera - {{ head }}"))
            ->add('starts_at',null,array("label"=>"Fecha de inicio"))
            ->add('suscribers',null,Array("label"=>"Añadir Miembros","required"=>false))
            ->add('grupos',null,Array("label"=>"Añadir Grupos","required"=>false))
            ->add('body',null,array('label'=>"Cuerpo del mensaje   - {{ body|raw }}",'attr' => array('class'=>'tinymce')))
        ;
    }

    public function getName()
    {
        return 'jet_newsletterbundle_campaigntype';
    }
}
