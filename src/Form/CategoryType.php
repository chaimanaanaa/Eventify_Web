<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => '⛔Please enter a category name',
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => '⛔The category name must be at least {{ limit }} characters long',
                        'max' => 255,
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => '⛔Please enter a valid  description',
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => '⛔The description must be at least {{ limit }} characters long',
                    ]),
                ],
            ])
            ->add('image', FileType::class, [
                'mapped' => false,
                'constraints' => $options['require_image'] ? [
                    
                    new Assert\File([
                        'maxSize' => '20M',
                        'maxSizeMessage' => '⛔The file is too large ({{ size }} {{ suffix }}). Maximum allowed size is {{ limit }} {{ suffix }}',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => '⛔Please upload a valid image (JPEG, PNG or WebP)',
                    ]),
                ] : [],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
            'require_image' => true, // Default to true, set to false when editing existing category
        ]);
    }
}