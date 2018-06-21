<?php

namespace App\Form;

use App\Entity\Location;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDeb', DateType::Class, [
                'label' => 'Début de la location'
            ])
            ->add('dateFin', DateType::Class, [
                'label' => 'Fin de la location'
            ])
        ;
        $builder
            ->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) {
                $location = $event->getData();
                $form = $event->getForm();

                if (!$location){
                    $form->get('dateDeb')->setData(new \DateTime('now'));
                    $form->get('dateFin')->setData(new \DateTime('tomorrow'));
                }
            })
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Location::class,
        ]);
    }
}
