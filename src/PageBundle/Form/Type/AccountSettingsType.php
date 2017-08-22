<?php

namespace PageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AccountSettingsType extends AbstractType{
    
    public function getName() {
        return 'accountSettings';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username', TextType::class, array(
                    'label' => 'Nick',
                    'required' => FALSE
                ))
                ->add('avatarFile', FileType::class, array(
                    'label' => 'Zmień avatar',
                    'required' => FALSE
                ))
                ->add('submit', SubmitType::class, array(
                    'label' => 'Zapisz zmiany'
                ));
    }
    
    public function setDefaultOptions(OptionsResolver  $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'PageBundle\Entity\User',
            'validation_groups' => array('Default', 'ChangeDetails')
        ));
    }
    
}