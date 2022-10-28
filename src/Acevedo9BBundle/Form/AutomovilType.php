<?php

namespace Acevedo9BBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AutomovilType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('marca', TextType::class, array())
                ->add('modelo', TextType::class, array())
                ->add('anio', TextType::class, array())
                ->add('color', TextType::class, array())
                ->add('usuario', EntityType::class, array(
                    'label' => 'Usuario',
                    'placeholder' => 'Seleccione un usuario...',
                    'class' => 'Acevedo9BBundle:Usuario',
                    'choice_label' => 'nombre',
                    'expanded' => false,
                    'multiple' => false
                ))
                ->add('submit', SubmitType::class, array(
                    'label' => 'Registrar'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Acevedo9BBundle\Entity\Automovil'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'acevedo9bbundle_automovil';
    }

}
