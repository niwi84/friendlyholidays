<?php

namespace HolidaysBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('eventEtat')
            ->add('eventLibel')
            ->add('eventDescrip')
            ->add('eventUserId')
            ->add('eventActiv', 'datetime')
            ->add('eventDesactiv', 'datetime')
            ->add('eventStart', 'datetime')
            ->add('eventEnd', 'datetime')
            ->add('eventBudget')
            ->add('eventComment')
            ->add('eventPhoto1')
            ->add('eventPhoto2')
            ->add('eventPhoto3')
            ->add('eventPhoto4')
            ->add('eventPhoto5')
            ->add('participants', 'entity', array(
                'class' => 'HolidaysBundle:User',
                'property' => 'nomPrenom',
                'expanded' => 'true',
                'multiple' => 'true'
            ))

        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HolidaysBundle\Entity\Event'
        ));
    }
}
