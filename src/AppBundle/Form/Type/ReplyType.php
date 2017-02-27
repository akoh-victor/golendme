<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Category;
use AppBundle\EventListener\ProjectListener;
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

class ReplyType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {



        $builder

                ->add('description', TextareaType::class, array(
                    'attr' => array('class' => 'tinymce'),
                    'data' => 'Describe your project here',
                 ))


          ;




    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Reply',
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'app_reply';
    }
}
