<?php

namespace Core\LocalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LocalType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('localname')
            ->add('email', 'email', array('required'  => false))
            ->add('comment')
            ->add('telephone')
            ->add('latitude')
            ->add('longitude')
            ->add('adress', 'text', array('label' => 'Calle', 'required' => false))
            ->add('numero', 'text', array('label'=>'Número', 'required' => false))
            ->add('piso', 'integer', array('label'=> 'Piso', 'required' => false))
            ->add('puerta', 'text', array('label'=> 'Puerta', 'required' => false))
            ->add('poblacion', 'text', array('label'=> 'Población', 'required' => false))
            ->add('provincia', 'text', array('label'=> 'Provincia', 'required' => false))
            ->add('codigo_postal', 'text', array('label'=> 'Código Postal', 'max_length' => 5, 'required' => false))
            ->add('web')
        ;
    }

    public function getName()
    {
        return 'core_localbundle_localtype';
    }
}
