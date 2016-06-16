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
            ->add('eventEtat', 'checkbox', array('label' => 'Etat (Actif/Inactif)'))
            ->add('eventLibel', 'text', array('label' => 'Libellé'))
            ->add('eventDescrip', 'text', array('label' => 'Description'))
            ->add('eventUserId')
            ->add('eventActiv', 'datetime', array('label' => 'Date d\'Activation'))
            ->add('eventDesactiv', 'datetime', array('label' => 'Date de désactivation'))
            ->add('eventStart', 'datetime', array())
            ->add('eventEnd', 'date', array( 'format' => 'dd/MM/yyyy hh:mm:ss'))
            ->add('eventBudget')
            ->add('eventComment', 'textarea', array('label' => 'Commentaire '))
            ->add('phEvent', 'file', array('label' => 'Photo illustration', 'required' => false))
//            ->add('eventPhoto1')
//            ->add('eventPhoto2')
//            ->add('eventPhoto3')
//            ->add('eventPhoto4')
//            ->add('eventPhoto5')
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
