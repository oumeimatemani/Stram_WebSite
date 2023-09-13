<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Metier;

class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre *',
            ])
            ->add('proprietaire', TextType::class, [
                'label' => 'Maître d\'ouvrage *',
            ])
            ->add('afficherProjet', CheckboxType::class, [
                'label' => 'Afficher le projet dans le site',
                'required' => false,
            ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'required' => false,
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
            ])
            ->add('date', TextType::class, [
                'label' => 'Date projet',
                'attr' => [
                    'class' => 'datepicker', // Add your datepicker class
                    'placeholder' => 'jj/mm/aaaa', // Placeholder for user guidance
                ],
            ])


            ->add('metiers', EntityType::class, [
                'class' => Metier::class,
                'choice_label' => 'titre',
                'multiple' => true,
                'required' => false,
                'label' => 'Métiers',
            ])
            ->add('gallerie', CollectionType::class, [
                'entry_type' => FileType::class,
                'allow_add' => true,
                'by_reference' => false,
                'required' => false,
                'label' => 'Galerie',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => \App\Entity\Projet::class,
        ]);
    }
}
