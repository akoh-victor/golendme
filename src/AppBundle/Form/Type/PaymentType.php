<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Category;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Akoh Ojochuma Victor <akoh.chuma@gmail.com>
 */

class PaymentType extends AbstractType
{
//    private $projectListener;
//    public function __construct(ProjectListener $projectListener)
//    {
//        $this->projectListener = $projectListener;
//    }
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        //$builder->addEventSubscriber($this->projectListener);

        $builder


            ->add('payer',  TextType::class, array(
                'attr' => array('class'=>'form-control','placeholder'=>'Name of the person the money is transferred from' ),
            ))
            ->add('modeofPayment',  TextType::class, array(
                'attr' => array('class'=>'form-control','placeholder'=>'eg Internet transfer' ),
            ))
            ->add('amount',  TextType::class, array(
                'attr' => array('class'=>'form-control','enter proper title' ),
            ))
            ->add('save',  SubmitType::class, array(
                'label' => 'Pay',
                'attr'=>array('class'=>"btn btn-md btn-outline btn-success btn-block")
            ));




       // $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            ///$event->stopPropagation();
       // }, 900);

    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Payment',
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'app_payment';
    }
}
