<?php

namespace App\Form;

use App\Entity\Habitaciones;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HabitacionesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('numadultos')
            ->add('numinfantiles')
            ->add('nummascotas')
            ->add('mediavaloracion')
            ->add('mediavaloracionmascotas')
            ->add('numcomentarios')
            ->add('precio')
            ->add('fechacreacion')
            ->add('activo')
            ->add('idhospedaje')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Habitaciones::class,
        ]);
    }
}
