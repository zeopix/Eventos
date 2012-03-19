<?php
namespace Role\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username', 'text', array(
            'label' => 'Nombre de Usuario'
             ))
            ->add('email', 'email', array(
            'label' => 'Correo electrónico'
        ))
            ->add('plainPassword','repeated', array(
            'type' => 'password',
            'first_name' => 'Elija una contraseña',
            'second_name' => 'Repita la contraseña'
        ));

    }

    public function getName()
    {
        return 'role_userbundle_registrationtype';
    }
}