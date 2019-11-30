<?php

namespace App\Form;

use App\Entity\Prise;
use App\Entity\Especes;
use App\Entity\Spot;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('especes', EntityType::class, [
              'class' => Especes::class,
              'choice_label' => 'nom'
            ])
            ->add('taille')
            ->add('spot', EntityType::class, [
              'class' => Spot::class,
              'choice_label' => 'nom'
              // 'choices' => ['site.category.nom' => "Mer"]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prise::class,
        ]);
    }
}
