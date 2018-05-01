<?php

namespace SoftUniBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserEditType extends UserType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add("roles", ChoiceType::class, [
            'choices' => [
                'User' => 'ROLE_USER',
                'Admin' => 'ROLE_ADMIN'
            ],
            'expanded' => true,
            'multiple' => true,
            'disabled'=> true,
            'choice_attr' => [
                'class' => 'form-control',
                'margin-right' => '10px'
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }
}
