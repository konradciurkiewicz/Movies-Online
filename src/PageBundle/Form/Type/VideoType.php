<?php

namespace PageBundle\Form\Type;

use Proxies\__CG__\PageBundle\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class VideoType extends AbstractType
{

    public function getName()
    {
        return 'video';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                'label' => 'Tytuł',
                'attr' => array(
                    'placeholder' => 'Tytuł'
                )
            ))
//            ->add('slug', TextType::class, array(
//                'label' => 'Przyjazny link',
//                'attr' => array(
//                    'placeholder' => 'np. gra-o-tron-sezon-1'
//                )
//            ))

            ->add('content', TextareaType::class, array(
                'label' => 'Opis'
            ))
            ->add('thumbnail', TextType::class, array(
                'label' => 'Miniaturka (242px x 200px )'
            ))
            ->add('tagline', TextType::class, array(
                'label' => 'Lista tagów (tagi wypisuj po przecinku np. tag1, tag2, tag3 )'
            ))
            ->add('category', EntityType::class, array(
                'label' => 'Kategoria',
                'class' => Category::class,
//                'property' => 'name',
                'choice_label' => 'name'
            ))

            ->add('save', SubmitType::class, array(
                'label' => 'Zapisz'
            ));
    }


    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PageBundle\Entity\Video'
        ));
    }

}