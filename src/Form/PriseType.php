<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Prise;
use App\Entity\Especes;
use App\Entity\Spot;

class PriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('especes', EntityType::class, [
              'class' => Especes::class,
              'choices' => $options['especesList'],
              'choice_label' => 'nom'
            ])
            ->add('taille')
            ->add('spot', EntityType::class, [
              'class' => Spot::class,
              'choices' => $options['spotList'],
              'choice_label' => 'nom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prise::class,
            'especesList' => [],
            'spotList' => []
        ]);
    }
}
