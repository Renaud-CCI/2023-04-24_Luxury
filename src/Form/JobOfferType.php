<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\JobOffer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class JobOfferType extends AbstractType
{
    private $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $clients= $this->entityManager->getRepository(Client::class)->findAll();
        
        
        $builder
            ->add('title')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Full Time' => 'full_time',
                    'Part Time' => 'part_time',
                    'Temporary' => 'temporary',
                    'Freelance' => 'freelance',
                    'Seasonal'  => 'seasonal',
                ],
                'attr' => [
                    'class' => 'mdb-select md-form colorful-select dropdown-primary',
                    'id' => 'type'
                ],
                'label' => 'Type',
                'required' => true,
            ])
            ->add('activity', ChoiceType::class, [
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
            ])
            // ->add('client_id', EntityType::class, [
            //     'class' => Client::class,
            //     'choice_label' => 'society_name',
            //     'placeholder' => 'Choose a client',
            //     'required' => true,
            // ])
            // ->add('job_category')
            ->add('description')
            ->add('location')
            ->add('salary')
            ->add('closing_date', DateTimeType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'js-datetimepicker'],
                // Format de date à utiliser
                'format' => 'yyyy-MM-dd HH:mm',
                'label' => 'Closing Date' //Ajout du label pour le champ
            ])
            ->add('notes')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => JobOffer::class,
        ]);
    }
}
