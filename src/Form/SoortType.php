<?php

namespace App\Form;

use App\Entity\Soort;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SoortType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('omschrijving', CKEditorType::class, array(
                'config' => array(
                    'uiColor' => '#ffffff'
                ),
            ))

            ->add('meerprijs')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Soort::class,
        ]);
    }
}
