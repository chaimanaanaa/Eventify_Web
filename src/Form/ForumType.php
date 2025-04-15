<?php

namespace App\Form;

use App\Entity\Forum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\File;

class ForumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie', ChoiceType::class, [
                'choices' => [
                    'Mariage' => 'mariage',
                    'Anniversaire' => 'anniversaire',
                    'Graduation' => 'graduation',
                    'Baby Shower' => 'baby_shower'
                ],
                'expanded' => true,
                'multiple' => false,
                'label' => false,
                
            ])
            ->add('description', TextareaType::class, [
                'attr' => ['style' => 'height: 150px'],
                'label' => false,
                
            ])
            ->add('imageFile', FileType::class, [
                'label' => false,
                'required' => false,
                'mapped' => false,
                
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Forum::class,
            'attr' => [
                'novalidate' => 'novalidate' // Désactive la validation HTML5 pour utiliser Symfony
            ]
        ]);
    }
}