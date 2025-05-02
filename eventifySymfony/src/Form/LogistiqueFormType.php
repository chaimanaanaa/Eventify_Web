<?php

namespace App\Form;

use App\Entity\Logistique;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\GreaterThan;

class LogistiqueFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Venue' => 'venue',
                    'Equipment' => 'equipment',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Type cannot be empty']),
                ],
            ])
            ->add('nom', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Nom cannot be empty']),
                    new Length([
                        'min' => 3,
                        'minMessage' => 'Nom must be at least {{ limit }} characters long',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z\s]+$/',
                        'message' => 'Nom cannot contain numbers or special characters',
                    ]),
                ],
            ])
            ->add('description', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Description cannot be empty']),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Description must be at least {{ limit }} characters long',
                    ]),
                ],
            ])
            ->add('quantite', NumberType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Quantité cannot be empty']),
                    new Type([
                        'type' => 'numeric',
                        'message' => 'Quantité must be a valid number',
                    ]),
                    new Positive(['message' => 'Quantité must be positive']),
                ],
            ])
            ->add('capacite', NumberType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Capacité cannot be empty']),
                    new Type([
                        'type' => 'numeric',
                        'message' => 'Capacité must be a valid number',
                    ]),
                    new Positive(['message' => 'Capacité must be positive']),
                    new GreaterThan([
                        'value' => 0,
                        'message' => 'Capacité must be greater than 0',
                    ]),
                ],
            ])
            ->add('prix', NumberType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Prix cannot be empty']),
                    new Type([
                        'type' => 'numeric',
                        'message' => 'Prix must be a valid number',
                    ]),
                    new Positive(['message' => 'Prix must be positive']),
                    new GreaterThan([
                        'value' => 0,
                        'message' => 'Prix must be greater than 0',
                    ]),
                ],
            ])
            ->add('lieux', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Lieux cannot be empty']),
                ],
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image (PNG, JPG)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Please upload a valid image file (JPG, PNG)',
                    ]),
                ],
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name', // Display the category name in the dropdown
                'placeholder' => 'Select a category', // Optional placeholder
                'constraints' => [
                    new NotBlank(['message' => 'Category cannot be empty']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Logistique::class,
        ]);
    }
}