<?php

namespace App\Form;

use App\Entity\Hospedaje;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HospedajeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('direccion')
            ->add('admin1code')
            ->add('admin2code')
            ->add('admin3code')
            ->add('telefono')
            ->add('email')
            ->add('fechacreacion')
            ->add('activo')
            ->add('idproveedor')
            ->add('idtipohospedaje')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Hospedaje::class,
        ]);
    }
}
