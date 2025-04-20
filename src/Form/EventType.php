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
            ->add('lieu', ChoiceType::class, [
                'choices' => [
                    'Tunisie' => [
                        'Ariana' => 'Ariana',
                        'Béja' => 'Béja',
                        'Ben Arous' => 'Ben Arous',
                        'Bizerte' => 'Bizerte',
                        'Gabès' => 'Gabès',
                        'Gafsa' => 'Gafsa',
                        'Jendouba' => 'Jendouba',
                        'Kairouan' => 'Kairouan',
                        'Kasserine' => 'Kasserine',
                        'Kébili' => 'Kébili',
                        'Le Kef' => 'Le Kef',
                        'Mahdia' => 'Mahdia',
                        'La Manouba' => 'La Manouba',
                        'Médenine' => 'Médenine',
                        'Monastir' => 'Monastir',
                        'Nabeul' => 'Nabeul',
                        'Sfax' => 'Sfax',
                        'Sidi Bouzid' => 'Sidi Bouzid',
                        'Siliana' => 'Siliana',
                        'Sousse' => 'Sousse',
                        'Tataouine' => 'Tataouine',
                        'Tozeur' => 'Tozeur',
                        'Tunis' => 'Tunis',
                        'Zaghouan' => 'Zaghouan',
                    ],
                    'International' => [
                        'Paris' => 'Paris',
                        'New York' => 'New York',
                        'Tokyo' => 'Tokyo',
                        'Berlin' => 'Berlin',
                        'Londres' => 'Londres',
                    ],
                ],
                'placeholder' => 'Sélectionnez un lieu',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
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