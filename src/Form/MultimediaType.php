<?php

namespace App\Form;

use App\Entity\Multimedia;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MultimediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombrefichero')
            ->add('tipo')
            ->add('principal')
            ->add('fechacreacion')
            ->add('activo')
            ->add('idhabitacion')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Multimedia::class,
        ]);
    }
}
