<?php
namespace AppBundle\EventListener;

use AppBundle\Event\AppEvent;

use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Listener responsible for creating the relationship
 * between brand and group on  product creation creation
 */
class PaymentListener implements EventSubscriberInterface
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        return array(
            AppEvent::PAYMENT_CREATED =>'onCreation',
            AppEvent::PAYMENT_CONFIRMED =>'onConfirmedSuccess'
        );
    }


    /**
     * @param Event $event
     */
    public function onCreationSuccess(FormEvent $event)
    {

            //check if there is a relationship btw brand and group
        $url = $this->router->generate('donate-dashboard');
        $event->setResponse(new RedirectResponse($url));

    }
    /**
 * @param Event $event
 */
    public function onConfirmedSuccess(Event $event)
    {
        //this would be trigered when the receiver confirmed the payment

        $payment = $event->getPayment();
        $donation = $payment->getDonation();
        $reciever =$payment->getParticipant();


    }
}
