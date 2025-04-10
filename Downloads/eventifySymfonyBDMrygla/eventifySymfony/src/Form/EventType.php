<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('categorie', ChoiceType::class, [
                'choices' => [
                    'Mariage' => 'mariage',
                    'Soutenance' => 'soutenance',
                    'Anniversaire' => 'anniversaire',
                    'Révélation de genre' => 'revelation_de_genre',
                ],
                'placeholder' => 'Choisir une catégorie',
                'required' => false,
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('lieu', TextType::class, [
                'required' => false,
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('nbInvite', NumberType::class, [
                'label' => 'Guests Number',
                'required' => false,
            ])
            ->add('prixEstime', NumberType::class, [
                'label' => 'Estimated Price',
                'required' => false,
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
            ])
            ->add('imageven', FileType::class, [
                'label' => 'Upload Image',
                'mapped' => false,
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}