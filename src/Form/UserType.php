<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Test\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'form-control',
                    'data-parsley-trigger' => 'change',
                    'data-parsley-error-message' => 'A valid email address is required.',
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Password',
                'attr' => [
                    'class' => 'form-control validate',
                    'minlength' => 6,
                ],
                'row_attr' => [
                    'class' => 'input-field',
                ],
                'invalid_message' => 'The password must be at least 6 characters.',
            ])
            ->add('password_confirmation', PasswordType::class, [
                'label' => 'Confirm Password',
                'attr' => [
                    'class' => 'form-control validate',
                    'data-match' => '#password',
                    'data-error' => 'Password does not match.',
                ],
                'row_attr' => [
                    'class' => 'input-field',
                ],
                'invalid_message' => 'Password does not match.',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'attr' => [
                'id' => 'register-form',
                'role' => "form",
                'method' => "post",
                'accept-char' => "UTF-8",
                'autocomplete' => "off",
                'data-parsley-validate' =>true
            ]
        ]);
    }

    // public function buildView(FormView $view, FormInterface $form, array $options)
    // {
    //     $view->vars['attr'] = $options['attr'];
    // }
}
