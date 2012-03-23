<?php
namespace Role\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

use Google\MapsBundle\Form\MapType;

class SampleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('mapa', new MapType());

    }

    public function getName()
    {
        return 'role_adminbundle_sampletype';
    }
}