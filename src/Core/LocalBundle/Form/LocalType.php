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
            ->add('adress')
            ->add('web')
        ;
    }

    public function getName()
    {
        return 'core_localbundle_localtype';
    }
}
