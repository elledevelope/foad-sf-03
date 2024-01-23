<?php

namespace App\Form;

use App\Entity\Formations;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            // ->add('resume')
            ->add('description')
            ->add('duree')
            ->add('category')
            ->add('niveau')
            ->add('lieu');
            // ->add('createdAt', DateTimeType::class, [
            //     'widget' => 'single_text',
            //     'input_format' => 'yyyy-MM-dd HH:mm:ss',
            //     'view_timezone' => 'Europe/Paris',
            // ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formations::class,
        ]);
    }
}
