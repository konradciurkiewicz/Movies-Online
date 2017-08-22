<?php

namespace PageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Tests\Extension\Core\Type\SubmitTypeTest;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class CommentType extends AbstractType {
        
    public function getName() {
        return 'comment';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('title', TextType::class, array(
                'label' => 'Tytuł odnośnika'
            ))
            ->add('comment', TextType::class, array(
                'label' => 'Odnośnik do filmu'
            ))
            ->add('iframe_able', CheckboxType::class, array(
                'label'    => 'Chcę, jeśli to możliwe, aby film był dostępny z poziomu strony gdzie-ogladac.pl w formie zagnieżdżonego odtwarzacza.(Dostępne wyłącznie w przypadku bezpośrednich linków do filmów z platformy You Tube)',
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Dodaj'
            ));
    }
    
    public function setDefaultOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'PageBundle\Entity\Comment'
        ));
    }
}
