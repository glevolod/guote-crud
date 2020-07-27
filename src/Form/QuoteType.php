<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Quote;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text')
            ->add('author', EntityType::class, [
                'class' => Author::class,
                'choice_label' => 'name'
            ])
            ->add('type', EntityType::class, [
                'class' => \App\Entity\QuoteType::class,
                'choice_label' => 'name',
                'placeholder' => 'choose a type',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Quote::class,
        ]);
    }
}
