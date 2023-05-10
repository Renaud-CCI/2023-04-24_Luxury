<?php

namespace App\Form;

use App\Entity\Candidate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('gender')
            ->add('address')
            ->add('country')
            ->add('nationality')
            ->add('passport')
            ->add('passport_file')
            ->add('cv')
            ->add('profile_picture')
            ->add('current_location')
            ->add('birthdate')
            ->add('birth_location')
            ->add('availability')
            ->add('experience')
            ->add('short_description')
            ->add('created_at')
            ->add('updated_at')
            ->add('deleted_at')
            ->add('deleted')
            ->add('files')
            ->add('job_category_id')
            ->add('user_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
