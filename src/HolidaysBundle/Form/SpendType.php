<?php

namespace HolidaysBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpendType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("spendType", "choice", array(
                "label" => "Type de sortie / dépense :",
                "choices" => array(
                    "Trajet aller" => "Trajet aller",
                    "Trajet retour" => "Trajet retour",
                    "Essence" => "Essence",
                    "Hôtel" => "Hôtel",
                    "Restaurant" => "Restaurant",
                    "Achat(s)" => "Achat(s)",
                    "Sortie" => "Sortie",
                    "Divers" => "Divers"
                )
            ))
            ->add('spendLibel')
            ->add('spendDate', 'datetime')
            ->add('spendPerso', "number", array(
                "label" => "Coût par personne :"))
            ->add('spendGroup', "number", array(
                "label" => "Coût global :"))
            ->add('spendGroup2', CheckboxType::class, array(
                "label" => "Paiement groupé :",
                "required" => false
            ))
            ->add('phSpend', 'file', array('label' => 'Photo illustration', 'required' => false))
//            ->add('spendPhoto')
            ->add('spendUserId')
            ->add('spendEventId');
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HolidaysBundle\Entity\Spend'
        ));
    }
}
