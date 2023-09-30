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
     
            ->add('description', TextType::class, [
                'label' => 'Description',
            ])
            ->add('image', FileType::class, [
                'data_class' => null, // Pour autoriser la mise à jour du fichier
                'required' => false,  // Rend le champ optionnel
            ])
            ->add('date', DateType::class, [
                'label' => 'Date de projet',
                'widget' => 'single_text', // Utilisez 'single_text' pour afficher un champ de texte simple
                'format' => 'yyyy-MM-dd', // Format de la date (modifiable selon vos besoins)
            ])
       
            ->add('metiers', EntityType::class, [
                'class' => Metier::class,
                'label' => 'Métiers',
                'multiple' => true, // Allow multiple selections
                'expanded' => true, // Display as checkboxes
                'choice_label' => 'titre', // Display the "titre" property of Metier entities
                'attr' => ['class' => 'form-control'],
            ])
     
            ->add('gallerie', FileType::class, [
                'data_class' => null, // Pour autoriser la mise à jour du fichier
                'required' => false,  // Rend le champ optionnel
            ])
  ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => \App\Entity\Projet::class,
        ]);
    }
}
