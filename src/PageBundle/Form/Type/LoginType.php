<?php

namespace PageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class LoginType extends AbstractType{

    public function getName() {
        return 'login';
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('username', TextType::class, array(
                'label' => 'Login'
            ))
            ->add('password', PasswordType::class, array(
                'label' => 'Hasło'
            ))
            ->add('remember_me', CheckboxType::class, array(
                'label' => 'Zapamiętaj mnie'
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Zaloguj'
            ));
    }

}