<?php
namespace AppBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Listener responsible for adding the default user role at registration
 */
class RegistrationListener implements EventSubscriberInterface
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }


    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',

        );
    }


    public function onRegistrationSuccess(FormEvent $event, $donat)
    {

        /**
         * get the package the user intent to register to
         * when you have the package check get donations available for that package
         * get the most qualified donation and take it to the user dashboard let him carry out the necesary
         * action
         *
         *
         */
        $form = $event->getForm();

        $startPack = $form['package']->getData();

           $startValue= $startPack->getValue();

        if ($startValue > 0){

            $url = $this->router->generate('donate-dashboard');
            $event->setResponse(new RedirectResponse($url));

         }

        if ($startValue == 0){

            //redirect to select package
            $url = $this->router->generate('home');
            $event->setResponse(new RedirectResponse($url));
        }

    }


}
