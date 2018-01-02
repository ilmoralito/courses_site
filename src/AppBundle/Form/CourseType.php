<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('startDate', null, ['widget' => 'single_text'])
            ->add('closingDate', null, ['widget' => 'single_text'])
            ->add('startsAt', null, ['hours' => [8, 9, 10, 11, 12, 13, 14, 15, 16], 'with_minutes' => false,])
            ->add('endsAt', null, ['hours' => [9, 10, 11, 12, 13, 14, 15, 16, 17], 'with_minutes' => false])
            ->add('objetive')
            ->add('addressedTo')
            ->add('result')
            ->add('requirements')
            ->add('modality')
            ->add('cost')
            ->add('registrationFee')
            ->add('type')
            ->add('facilitators')
            ->add('items');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Course'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_course';
    }


}
