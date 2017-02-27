<?php
namespace AppBundle\Event;



/**
 * contains all the event thrown in the app locally
 */
final class AppEvent
{


    /**
     * The PROJECT_CREATED event .
     *
     * This event allows you to carry out an action after a project is created.
     *
     * @Event("AppBundle\Event\PaymentCreatedEvent")
     */
    const PAYMENT_CREATED = 'payment.created';

    /**
     * The PROJECT_CREATED event .
     *
     * This event allows you to carry out an action after a project is created.
     *
     * @Event("AppBundle\Event\PaymentConfirmedEvent")
     */
    const PAYMENT_CONFIRMED = 'payment.confirmed';

    /**
     * The PROJECT_CREATED event .
     *
     * This event allows you to carry out an action after a project is created.
     *
     * @Event("AppBundle\Event\PaymentDeclinedEvent")
     */
    const PAYMENT_DECLINED = 'payment.declined';
    /**
     * The PROJECT_CREATED event .
     *
     * This event allows you to carry out an action after a project is created.
     *
     * @Event("AppBundle\Event\TicketRaisedEvent")
     */
    const TICKET_RAISED = 'ticket.raised';




}