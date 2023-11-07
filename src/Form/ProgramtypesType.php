<?php

namespace App\Form;

use App\Entity\TbProgrameTypes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProgramtypesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('label')
            ->add('createdat')
            ->add('modifiedat')
            ->add('activated')
            ->add('code')
            ->add('createdby')
            ->add('modifiedby')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TbProgrameTypes::class,
        ]);
    }
}
