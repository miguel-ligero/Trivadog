<?php

namespace App\Form;

use App\Entity\Comentarioshospedaje;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ComentarioshospedajeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('comentario')
            ->add('valoracion')
            ->add('valoracionmascotas')
            ->add('fechacreacion')
            ->add('activo')
            ->add('idcliente')
            ->add('idhabitacion')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comentarioshospedaje::class,
        ]);
    }
}
