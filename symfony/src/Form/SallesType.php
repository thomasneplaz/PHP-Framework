<?php

namespace App\Form;

use App\Entity\Salles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
class SallesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::Class, [
                'label' => 'Nom de la nouvelle salle',
                'required' => true
            ])
            ->add('adress', TextType::Class, [
                'label' => 'A quel endroit ce situe la salle',
                'required' => true
            ])
            ->add('prix', IntegerType::Class, [
                'label' => 'Montant de la location pour 1 journée',
                'required' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Salles::class,
        ]);
    }
}
