<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ReclamationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control datetime-picker'
                ],
                'label' => 'Date'
            ])
            ->add('titre', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('sujet', TextareaType::class, [ // Changed to TextareaType
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 5,
                    'placeholder' => 'Enter your detailed message here...'
                ],
                'label' => 'Subject Details'
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Upload Image',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control file-upload',
                    'onchange' => 'previewImage(this)'
                ]
            ])
            ->add('statu', HiddenType::class, [
                'data' => 'Pending'
            ])
            ->add('imageFile', FileType::class, [
                'label' => $options['edit_mode'] ? 'Replace Image' : 'Upload Image',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control file-upload',
                    'onchange' => 'previewImage(this)'
                ]
            ]);
    
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
            'edit_mode' => false, // Add this new option
        ]);
    }
    
}