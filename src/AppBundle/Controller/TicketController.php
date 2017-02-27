<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Payment;
use AppBundle\Entity\Ticket;
use AppBundle\Event\AppEvent;
use AppBundle\Event\PaymentCreatedEvent;
use AppBundle\Form\Type\PaymentType;
use AppBundle\Form\Type\TicketType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class TicketController extends Controller
{


    /**
     * @Route("/ticket/raise/", name="raise-ticket")
     */
    public function ticketRaiseAction(Request $request)
    {
        $user = $this->getUser();
        $Ticket = $this->getDoctrine()->getRepository('AppBundle:Ticket');
         $tickets=$Ticket->findUserOpenTicket($user);
         $ticket =new Ticket();
        //user here is the payer
        $user = $this->getUser();

        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

                    if ($form->isSubmitted() && $form->isValid()) {

                        $ticket->setStatus("unresolved");
                        $ticket->setParticipant($user);
                        $ticket->setOpen(1);
                        $ticket->setVisible(1);
                        $ticket->setReplied(0);
                        $ticket->setPosted(new \DateTime('now'));


                        $em = $this->getDoctrine()->getManager();
                        $em->persist($ticket);
                        $em->flush();
                        return $this->redirect($this->generateUrl('raise-ticket'));

                    }



            return $this->render('ticket/create.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
                'tickets'=>$tickets,

             ));
    }






}