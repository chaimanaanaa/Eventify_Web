<?php

namespace App\Form;

use App\Entity\Reponse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReponseTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('text', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control response-textarea',
                    'rows' => 4,
                    'placeholder' => 'Type your official response here...'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Submit Response',
                'attr' => [
                    'class' => 'btn btn-primary mt-3',
                    'data-loading-text' => '<i class="fas fa-spinner fa-spin"></i> Processing...'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponse::class,
            'validation_groups' => ['Default', 'create'],
        ]);
    }
}