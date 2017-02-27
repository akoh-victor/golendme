<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Payment;
use AppBundle\Event\AppEvent;
use AppBundle\Event\PaymentCreatedEvent;
use AppBundle\Form\Type\PaymentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class PaymentController extends Controller
{


    /**
     * @Route("/dashboard/payment/{reservationId}", name="payment-made")
     */
    public function paymentMadeAction($reservationId,Request $request)
    {
        /**
         * get the user and donation
         * then use that to get the reservation that payment will be made for
         * user in this case is the payer i.e the person that paid
         */


        $Reservation = $this->getDoctrine()->getRepository('AppBundle:Reservation');

        //user here is the payer
        $user = $this->getUser();



        $reservation =  $Reservation->find($reservationId);


        if(!empty($reservation)){


            $Payment = $this->getDoctrine()->getRepository('AppBundle:Payment');

            $checkPayment=$Payment->findReservationPayment($reservationId);

            if ($reservation->getStatus()=="reserved"){


                ///check if payment have been created for this reservation
                if(!empty($checkPayment)){
                         //found payment for this reservation
                    return $this->redirect($this->generateUrl('paid-dashboard',
                        array('paymentId' =>$checkPayment->getId() )));
                    }else{
                    // create new payment for reservation
                    $payment = new Payment();
                    $form = $this->createForm(PaymentType::class, $payment);
                    $form->handleRequest($request);

                    if ($form->isSubmitted() && $form->isValid()) {

                        $payment->setCreated(new \DateTime());
                        $payment->setStatus(0);
                        $payment->setDonation($reservation->getDonation());
                        $payment->setParticipant($user);
                        $payment->setReservation($reservation);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($payment);
                        $em->flush();


                        $reservation->setPay(1);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($reservation);
                        $em->flush();


                        $dispatcher = $this->get('event_dispatcher');
                        $event = new PaymentCreatedEvent($payment, $request);

                        $dispatcher->dispatch(AppEvent::PAYMENT_CREATED, $event);
                        $paymentId=$payment->getId();

                        return $this->redirect($this->generateUrl('paid-dashboard',
                            array('paymentId' =>$paymentId )));
                    }
                }


            }elseif ($reservation->getStatus() == "paid"){
                //RESERVATION ALREADY PAID SO GO TO RECIEVE
                $Payment= $this->getDoctrine()->getRepository('AppBundle:Payment');

                $payment=$Payment->findReservationPayment($reservation->getId());
                return $this->redirect($this->generateUrl('paid-dashboard',
                    array('paymentId' =>$payment->getId() )));
                }else{
                    //reservation is purged
                    //redirect you to suscribe to another package
                    return $this->redirect($this->generateUrl('recycle-dashboard'));
                     }

        }else{
            //reservation is disable.
            //redirect you to suscribe to another package
            return $this->redirect($this->generateUrl('recycle-dashboard'));
        }
                //this is the nav variables
        $Donation = $this->getDoctrine()->getRepository('AppBundle:Donation');
                $activeDonation="";
                $activeReservation="";
                $recycle="";
                $userDonation=$Donation->findUserDonation($user);
                $userReservation=$Reservation->findUserReservation($user);

                if(!empty($userDonation)){
                    $activeDonation=1;
                }
                if(!empty($userReservation)){
                    $activeReservation=1;
                }
                else{
                    $recycle=1;
                }

            return $this->render('profile/pay.html.twig', array(
            'user' => $user,
            'reservation'=>$reservation ,
            'form' => $form->createView(),
                'activeDonation'=>$activeDonation,
                'activeReservation'=>$activeReservation,
                'recycle'=>$recycle
             ));
    }






}