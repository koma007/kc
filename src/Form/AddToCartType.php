<?php

namespace App\Form;

use App\Entity\ZamowienieProdukt;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddToCartType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->setMethod('POST')
            ->add('quantity')
            ->add('produkt')
            ->add('rodzaj', ChoiceType::class, [
                'expanded' => true,
                'choices' => [
                    'Solo' => 'solo',
                    'Wazon' => 'w',
                    'Komplet' => 'kpl',
                    'Kpl z 2 wazonami' => '2w',
                ],
                'data' => 'kpl', // Ustawienie wartości domyślnej na 'kpl'
            ])
//            ->add('zamowienieRef')
            ->add('add', SubmitType::class, [
            'label' => 'Dodaj do koszyka'
        ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ZamowienieProdukt::class,
        ]);
    }
}
