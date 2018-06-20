<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
=======
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

>>>>>>> a07042c91f383861d5548d2a7bbfb83e7e24274c

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Username',
                'required' => true
            ])
            ->add('password', PasswordType::Class, [
                'label' => 'Password',
                'required' => true
            ])
            ->add('nom')
            ->add('prenom')
            ->add('roles', ChoiceType::class,
              array(
                'choices'  => array(
                'ROLE_USER' => 'ROLE_USER',
                'ROLE_ADMIN' => 'ROLE_ADMIN',
                  )))
            ->add('isActive')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
