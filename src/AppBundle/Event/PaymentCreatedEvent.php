<?php
namespace AppBundle\Event;

use AppBundle\Entity\Payment;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/**
 * The product created event is dispatched each time an product is created
 * in the system.
 * for the the listners to carry out post product creation actions
 */
class PaymentCreatedEvent extends Event
{


    protected $payment;
    private $request;
    private $response;

    public function __construct(Payment $payment, Request $request)
    {
        $this->payment = $payment;
        $this->request=$request;
    }
    /**
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @return Request
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }
    /**
     * @return Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }
}