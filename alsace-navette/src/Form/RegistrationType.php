<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite', ChoiceType::class, [
                'choices' => [
                    'Civilité' => null,
                    'Monsieur' => true,
                    'Madame' => false
                ],
                'label' => false
            ])
            ->add('nom', null, array('label => false'))
            ->add('prenom', null, array('label => false'))
            ->add('codepostal', null, array('label => false'))
            ->add('email', null, array('label => false'))
            ->add('ville', null, array('label => false'))
            ->add('telfixe', null, array('label => false'))
            ->add('telportable', null, array('label => false'))
            ->add('password', PasswordType::class)
            ->add('professionnel', CheckboxType::class, array('label => false'))
            ->add('nomsociete', null, array('label => false'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
