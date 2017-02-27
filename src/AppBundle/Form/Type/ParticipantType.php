<?php

namespace AppBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * @author Akoh Ojochuma Victor <akoh.chuma@gmail.com>
 */




class ParticipantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('firstName',  TextType::class, array(
                'attr' => array('class'=>'form-control','placeholder'=>'John',
                    'translation_domain' => 'FOSUserBundle','label' => 'First Name' ),
            ))
            ->add('lastName',  TextType::class, array(
                'attr' => array('class'=>'form-control','placeholder'=>'Doe',
                    'translation_domain' => 'FOSUserBundle','label' => 'Last Name' ),
            ))
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email',
                'attr'=>array('class'=>'form-control','placeholder'=>'Email@domain.com',),'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => 'form.username',    'attr'=>array('class'=>'form-control','placeholder'=>'MrDoe',),'translation_domain' => 'FOSUserBundle'))


            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                'attr'=>array('class'=>'form-control'),
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('package', EntityType::class, array(
                'class'=>'AppBundle:Package',
                'choice_label'=>'value',
                'required' => True,
                'placeholder' => 'Choose a Package ?',
                'attr' => array('class'=>'form-control')
            ))


            ->add('phone', NumberType::class, array(
                'label' => 'Contact Phone','attr'=>array('class'=>'form-control','placeholder'=>'2348081*****6',),'translation_domain' => 'FOSUserBundle'
            ))
            ->add('bank', TextType::class, array(
                'label' => 'Bank','attr'=>array('class'=>'form-control','placeholder'=>'Zenith',),'translation_domain' => 'FOSUserBundle'
            ))
            ->add('accountName', TextType::class, array(
                'label' => 'Account Name','attr'=>array('class'=>'form-control','placeholder'=>'John Doe',),'translation_domain' => 'FOSUserBundle'
            ))
            ->add('accountNumber', NumberType::class, array(
                'label' => 'Account Number','attr'=>array('class'=>'form-control','placeholder'=>'00391**345',),'translation_domain' => 'FOSUserBundle'
            ));


    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Participant',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {

        return 'app_participant';
    }
}
