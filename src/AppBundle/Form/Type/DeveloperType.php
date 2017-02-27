<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\UserBundle\Util\LegacyFormHelper;

/**
 * @author Akoh Ojochuma Victor <akoh.chuma@gmail.com>
 */




class DeveloperType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */


    public function buildForm(FormBuilderInterface $builder, array $options)
    {


    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Developer',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_developer';
    }
}
