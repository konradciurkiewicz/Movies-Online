<?php

namespace PageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RememberPasswordType extends AbstractType {
    
    public function getName() {
        return 'rememberPassword';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('email', EmailType::class, array(
                    'label' => 'Twój email',
                    'constraints' => array(
                        new Assert\NotBlank(),
                        new Assert\Email()
                    )
                ))
                ->add('submit', SubmitType::class, array(
                    'label' => 'Przypomnij hasło'
                ));
    }

}