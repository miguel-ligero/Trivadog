<?php

namespace App\Form;

use App\Entity\Reservas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechainicio')
            ->add('fechafin')
            ->add('adultos')
            ->add('infantiles')
            ->add('mascotas')
            ->add('precio')
            ->add('fechacreacion')
            ->add('activo')
            ->add('idcliente')
            ->add('idhabitacion')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservas::class,
        ]);
    }
}
