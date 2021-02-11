<?php

namespace App\Form;

use App\Entity\Servicioshabitaciones;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServicioshabitacionesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechacreacion')
            ->add('activo')
            ->add('idhabitacion')
            ->add('idservicio')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Servicioshabitaciones::class,
        ]);
    }
}

