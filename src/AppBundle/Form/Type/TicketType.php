<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Category;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;

/**
 * @author Akoh Ojochuma Victor <akoh.chuma@gmail.com>
 */

class TicketType extends AbstractType
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

            ->add('title',  TextType::class, array(
                'attr' => array('class'=>'form-control','placeholder'=>'eg Unconfirmed Payment' ),
            ))
            ->add('phone',  IntegerType::class, array(
                'attr' => array('class'=>'form-control','placeholder'=>'please provide a valid phone ' ),
            ))
            ->add('email',  EmailType::class, array(
                'attr' => array('class'=>'form-control','placeholder'=>'please provide a valid email' ),
            ))
            ->add('description',  TextareaType::class, array(
                'attr' => array('class'=>'form-control','placeholder'=>'What is the reason for this ticket ? Be specific' ),
            ))

            ->add('Send',  SubmitType::class, array(
                'label' => 'Send',
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
            'data_class' => 'AppBundle\Entity\Ticket',
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'app_ticket';
    }
}
