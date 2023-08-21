<?php

namespace App\Form;

use App\Entity\Zamowienie;
use App\Form\EventListener\ClearCartListener;
use App\Form\EventListener\RemoveCartItemListener;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CartType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('produkty', CollectionType::class, [
                'entry_type' => CartItemType::class
            ])
//            ->add('recalculate', SubmitType::class, [
//                'label' => 'Przelicz'
//            ])
            ->add('saveOrder', SubmitType::class, [
                'label' => 'Złóż zamówienie'
            ])
            ->add('clear', SubmitType::class, [
                'label' => 'Wyczyść'
            ]);

        $builder->addEventSubscriber(new RemoveCartItemListener());
        $builder->addEventSubscriber(new ClearCartListener());
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Zamowienie::class,
        ]);
    }
}
