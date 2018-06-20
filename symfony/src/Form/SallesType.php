<?php

namespace App\Form;

use App\Entity\Salles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

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
                'label' => 'Adresse de la salle',
                'required' => true
            ])
            ->add('prix', IntegerType::Class, [
                'label' => 'Prix de la location pour la journée',
                'required' => true
            ])
            // ->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            //     $user = $event->getData();
            //     $form = $event->getForm();

            //     $form->add('client','', [
            //         'data' => $this->get('security.context')->getToken()->getUser()->getId()
            //     ]);

            // })
        ;


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Salles::class,
        ]);
    }
}
