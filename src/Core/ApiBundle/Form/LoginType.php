<?php
namespace Core\ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username', 'text', array(
            'label' => 'Nombre de Usuario'
             ))
            ->add('plainPassword','password');

    }

    public function getName()
    {
        return 'core_apibundle_logintype';
    }
}