<?php
namespace PageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegisterUserType extends AbstractType{
    
    public function getName() {
        return 'userRegister';
    }    
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
            ->add('email', EmailType::class, array(
                'label' => 'E-mail'
            ))
            ->add('username', TextType::class, array(
                'label' => 'Nick'
            ))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array(
                    'label' => 'Hasło'
                ),
                'second_options' => array(
                    'label' => 'Powtórz hasło'
                )
            ))
            ->add('rules', CheckboxType::class, array(
                'label'    => 'Akceptuje zasady serwisu gdzie-ogladac.pl',
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Zarejestruj'
            ));
    }
    
    public function setDefaultOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'PageBundle\Entity\User',
            'validation_groups' => array('Default', 'Registration')
        ));
    }
}
