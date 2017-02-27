<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Donation;
use AppBundle\Entity\Reservation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection as collections;

class ParticipantController extends Controller
{
    /**
     * @Route("/register/participant", name = "participant-registration")
     */
    public function registerAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('AppBundle\Entity\Participant');
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction()
    {
        $Donation= $this->getDoctrine()->getRepository('AppBundle:Donation');
        $Reservation = $this->getDoctrine()->getRepository('AppBundle:Reservation');
        $user = $this->getUser();

        $activeDonation="";
        $activeReservation="";
        $recycle="";
        $userDonation=$Donation->findUserDonation($user);
        $userReservation=$Reservation->findUserReservation($user);

        if(!empty($userDonation)){
            $activeDonation=1;
        }
        elseif(!empty($userReservation)){
            $activeReservation=1;
        }
        else{
            $recycle=1;
        }


        return $this->render('profile/index.html.twig', array(
            'user' => $user,
            'activeDonation'=>$activeDonation,
            'activeReservation'=>$activeReservation,
            'recycle'=>$recycle


        ));
    }

    /**
     * @Route("/dashboard/receive", name="receive-dashboard")
     */
    public function receiveDashboardAction()
    {
        $user = $this->getUser();

        /**
         * dashboard as the person reciving cash i.e your payment av been confirmed
         */
        $Donation= $this->getDoctrine()->getRepository('AppBundle:Donation');
        $Reservation = $this->getDoctrine()->getRepository('AppBundle:Reservation');




        //this is the nav variables

        $donation="";
        $activeReservation="";
        $recycle="";

        $userDonation=$Donation->findUserDonation($user);
        $userReservation=$Reservation->findUserReservation($user);

        if(!empty($userDonation)){
            $activeDonation=1;
            $donation = $Donation->find($userDonation['0']->getId());
        }
        elseIf(!empty($userReservation)){
            $activeReservation=1;
        }
        else{

            //let it redirect to recycle
            $recycle = 1;
        }
         // all you are to do here is to check get this user donation




        return $this->render('profile/receive.html.twig', array(
            'user' => $user,
            'activeDonation'=>$activeDonation,
            'donation'=>$donation,
            'activeReservation'=>$activeReservation,
            'recycle'=>$recycle

        ));
    }

    /**
     * @Route("/dashboard/donate", name="donate-dashboard")
     */
    public function showProfileAction()
    {
        $user = $this->getUser();

        $package=$user->getPackage();
        /**
         * get the ideal donation for the user to pay
         */
        $Donation = $this->getDoctrine()->getRepository('AppBundle:Donation');
        $Reservation = $this->getDoctrine()->getRepository('AppBundle:Reservation');
        $donations = $Donation->findIncompleteDonations($package);
        $donation ="";

        //this is the nav variables

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



        //check the allowed payment
        foreach ($donations as $donation) {
            $allowedPayment = $donation->getAllowedPayment();
            $donation=$Donation->findToPayDonation($allowedPayment);

        }

        //once a donation is selected
        //update that donation to increase the reservation
        if(!empty($donation)){
            //colect the donation in each donation
            $eachDonation = $donation['0'];

              $reservationCheck = $Reservation->findReservationCheck($user,$eachDonation);

                     if(!empty($reservationCheck)){

                         $Payment = $this->getDoctrine()->getRepository('AppBundle:Payment');

                         $reservationId=$reservationCheck['0']->getId();

                         $checkPayment=$Payment->findReservationPayment($reservationId);


                         if (!empty($checkPayment)) {

                             // this user have paid for his reservation so he should be
                             // taken to paid and wait for confirmation
                             //now check if payment is confirmed
                             $checkReservationConfirmation = $reservationCheck['0']->getStatus();

                             if ($checkReservationConfirmation == "paid") {
                                 //paid confirmed
                                 //paid not confirmed
                                 return $this->redirect($this->generateUrl('receive-dashboard'));

                             } elseif ($checkReservationConfirmation == "reserved") {
                                 //paid not confirmed
                                 return $this->redirect($this->generateUrl('paid-dashboard',
                                     array('paymentId' => $checkPayment['0']->getId())));
                             }


                         }

                     }

                     else {

                         //then create payment reservation
                         $reservation = new Reservation();
                         $reservation->setStatus('reserved');
                         $reservation->setDonation($eachDonation);
                         $reservation->setPayer($user);
                         $reservation->setEnabled(1);
                         $reservation->setPay(0);
                         $reservation->setDelet(0);
                         $reservation->setCreated(new \DateTime());

                         $em = $this->getDoctrine()->getManager();
                         $em->persist($reservation);
                         $em->flush();

                         $curReservation = $eachDonation->getReserveCount();
                         $updateReservation = $curReservation + 1;
                         $eachDonation->setReserveCount($updateReservation);

                         $em = $this->getDoctrine()->getManager();
                         $em->persist($eachDonation);
                         $em->flush();

                         $reservationId=$reservation->getId();
                     }
        }else{
            $reservationId='';
            return $this->redirect($this->generateUrl('noplan-dashboard'));
        }



        return $this->render('profile/donate.html.twig', array(
            'user' => $user,
            'donation'=>$donation,
            'reservation'=>$reservationId,
            'activeDonation'=>$activeDonation,
            'activeReservation'=>$activeReservation,
            'recycle'=>$recycle,
            'userReservation'=>$userReservation


        ));
    }



    /**
     * @Route("/dashboard/confirmed/{reservationId}", name="confirmed-dashboard")
     */
    public function dashboardConfirmedAction(Request $request,$reservationId)
    {


        $Payment= $this->getDoctrine()->getRepository('AppBundle:Payment');
        $Reservation= $this->getDoctrine()->getRepository('AppBundle:Reservation');
        $Participant= $this->getDoctrine()->getRepository('AppBundle:Participant');

        $reservationPayment = $Payment->findPayment($reservationId);





        if( $reservationPayment!= null)
        {


            //payment have been made for this reservation
            //then you can confirm

            $reservationPayment->setStatus(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservationPayment);
            $em->flush();

             //get the reservation
            $reservation = $Reservation->find($reservationId);

                    if(!empty($reservation)){

                        $reservation->setStatus('paid');
                        $reservation->setEnabled(0);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($reservation);
                        $em->flush();
                    }

            // increase payers donation count

            $payerId=$reservation->getPayer();
            $paidPackage=$reservation->getDonation()->getPackage();

            $payer =$Participant->find($payerId);

            $packageName =$paidPackage->getName();

            if ($packageName == "Basic"){

             $curCount = $payer->getBasicCount();
             $count= $curCount+1;
             $payer->setBasicCount($count);

            $em = $this->getDoctrine()->getManager();
            $em->persist($payer);
            $em->flush();

            }
            if ($packageName == "Standard"){

                $curCount = $payer->getStandardCount();
                $count= $curCount+1;
                $payer->setStandardCount($count);

                $em = $this->getDoctrine()->getManager();
                $em->persist($payer);
                $em->flush();

            }
            if ($packageName == "Premium"){

                $curCount = $payer->getPremiumCount();
                $count= $curCount+1;
                $payer->setPremiumCount($count);

                $em = $this->getDoctrine()->getManager();
                $em->persist($payer);
                $em->flush();

            }
            if ($packageName =="Silver"){

                $curCount = $payer->getSilverCount();
                $count= $curCount+1;
                $payer->setSilverCount($count);

                $em = $this->getDoctrine()->getManager();
                $em->persist($payer);
                $em->flush();

            }

            // update donation record

            $paidDonation=$reservation->getDonation();
            $curReward = $paidDonation->getReward();
            $curPaymentCount = $paidDonation->getPaymentCount();
            $curReceived = $paidDonation->getReceived();

            $updatedReward = $curReward + $paidPackage->getValue();
            $updatedPaymentCount = $curPaymentCount + 1;
            $updatedReceived = $curReceived + $paidPackage->getValue();

            $paidDonation->setReward($updatedReward);
            $paidDonation->setPaymentCount($updatedPaymentCount);
            $paidDonation->setReceived($updatedReceived);

            $em = $this->getDoctrine()->getManager();
            $em->persist($paidDonation);
            $em->flush();



            //then create donation for that for ther payers
            $payerDonation = new Donation();

            $payerDonation->setComplete(0);
            $payerDonation->setReward(0);
            $payerDonation->setPaymentCount(0);
            $payerDonation->setReserveCount(0);
            $payerDonation->setStatus('incomplete');
            $payerDonation->setValue($paidPackage->getValue());
            $payerDonation->setReceived(0);

            $payerDonation->setParticipant($payer);
            $payerDonation->setPackage($paidPackage);

            if ($packageName == "Basic"){
                $curCount = $payer->getBasicCount();
                if($curCount == 5){
                    $payerDonation->setAllowedPayment(3);
                }

            }
            if ($packageName == "Standard"){
                $curCount = $payer->getStandardCount();
                if($curCount == 5){
                    $payerDonation->setAllowedPayment(3);
                }

            }
            if ($packageName == "Premium"){
                $curCount = $payer->getPremiumCount();
                if($curCount == 5){
                    $payerDonation->setAllowedPayment(3);
                }

            }
            if ($packageName == "Silver"){
                $curCount = $payer->getSilverCount();
                if($curCount == 5){
                    $payerDonation->setAllowedPayment(3);
                }

            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($payerDonation);
            $em->flush();

            //check and close donation
            $paymentCount=$paidDonation->getPaymentCount();
            $allowedPayment=$paidDonation->getAllowedPayment();
            $completeDonation=false;
            if($paymentCount ==$allowedPayment){

               $completeDonation=true;
                $paidDonation->setComplete(1);
                $em = $this->getDoctrine()->getManager();
                $em->persist($paidDonation);
                $em->flush();
            }
                  if($completeDonation == true){
                     //recycle dashboard will present the available plan for you to suscribe to
                      return $this->redirect($this->generateUrl('recycle-dashboard'));
                  }else{
                      return $this->redirect($this->generateUrl('dashboard'));
                  }

        }else{
            return $this->redirect($this->generateUrl('receive-dashboard'));
        }


    }


    /**
     * @Route("/dashboard/recycle/", name="recycle")
     */
    public function recycleIndexAction(Request $request,$packageId)
    {

        $Donation= $this->getDoctrine()->getRepository('AppBundle:Donation');
        $Reservation = $this->getDoctrine()->getRepository('AppBundle:Reservation');
        $user = $this->getUser();
        //this is the nav variables

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

        return $this->render('profile/recycle.html.twig', array(
            'activeDonation'=>$activeDonation,
            'activeReservation'=>$activeReservation,
            'recycle'=>$recycle
    ));
    }
    /**
     * @Route("/dashboard/recycle/{packageId}", name="recycle-dashboard")
     */
    public function recycleAction(Request $request,$packageId)
    {
        $user = $this->getUser();
        /**
         * get the ideal donation for the user to pay
         */
        $Donation = $this->getDoctrine()->getRepository('AppBundle:Donation');
        $Reservation = $this->getDoctrine()->getRepository('AppBundle:Reservation');
        $donations = $Donation->findIncompleteDonations($packageId);
        $donation ="";


        //check the allowed payment
        foreach ($donations as $donation) {
            $allowedPayment = $donation->getAllowedPayment();
            $donation=$Donation->findToPayDonation($allowedPayment);

        }

        //once a donation is selected
        //update that donation to increase the reservation
        if(!empty($donation)){
            //colect the donation in each donation
            $eachDonation = $donation['0'];

            $reservationCheck = $Reservation->findReservationCheck($user,$eachDonation);

            if(!empty($reservationCheck)){

                $Payment = $this->getDoctrine()->getRepository('AppBundle:Payment');

                $reservationId=$reservationCheck['0']->getId();

                $checkPayment=$Payment->findReservationPayment($reservationId);


                if (!empty($checkPayment)) {

                    // this user have paid for his reservation so he should be
                    // taken to paid and wait for confirmation
                    //now check if payment is confirmed
                    $checkReservationConfirmation = $reservationCheck['0']->getStatus();

                    if ($checkReservationConfirmation == "paid") {
                        //paid confirmed
                        //paid not confirmed
                        return $this->redirect($this->generateUrl('receive-dashboard'));

                    } elseif ($checkReservationConfirmation == "reserved") {
                        //paid not confirmed
                        return $this->redirect($this->generateUrl('paid-dashboard',
                            array('paymentId' => $checkPayment['0']->getId())));
                    }


                }

            }

            else {

                //then create payment reservation
                $reservation = new Reservation();
                $reservation->setStatus('reserved');
                $reservation->setDonation($eachDonation);
                $reservation->setPayer($user);
                $reservation->setEnabled(1);
                $reservation->setPay(0);
                $reservation->setDelet(0);
                $reservation->setCreated(new \DateTime());

                $em = $this->getDoctrine()->getManager();
                $em->persist($reservation);
                $em->flush();

                $curReservation = $eachDonation->getReserveCount();
                $updateReservation = $curReservation + 1;
                $eachDonation->setReserveCount($updateReservation);

                $em = $this->getDoctrine()->getManager();
                $em->persist($eachDonation);
                $em->flush();

                $reservationId=$reservation->getId();
                return $this->redirect($this->generateUrl('donate-dashboard'));
            }
        }else{
            $reservationId='';
            return $this->redirect($this->generateUrl('noplan-dashboard'));
        }


        return $this->render('profile/recycle.html.twig', array(
        ));
    }

    /**
     * @Route("/dashboard/purge/{reservationId}", name="purge-dashboard")
     */
    public function purgeAction(Request $request,$reservationId)
    {
        $Reservation= $this->getDoctrine()->getRepository('AppBundle:Reservation');
        $Participant= $this->getDoctrine()->getRepository('AppBundle:Participant');
        $Donation= $this->getDoctrine()->getRepository('AppBundle:Donation');

         $reservation = $Reservation->find($reservationId);
         $donation = $Donation->find($reservation->getDonation());
         $payer = $Participant->find($reservation->getPayer());

         //reduce Donationcount

        $curDonationReservationCount = $donation->getReserveCount();
        $updatedReservationCount = $curDonationReservationCount - 1;

        $donation->setReserveCount($updatedReservationCount);

        $em = $this->getDoctrine()->getManager();
        $em->persist($donation);
        $em->flush();

        //change reservation status
        $reservation->setStatus('purged');
        $reservation->setEnabled(0);
        $reservation->setDelet(1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($reservation);
        $em->flush();

        //set participant purge count
        $curPurgecount=$payer->getPurgeCount();
        $updatePurgeCount = $curPurgecount + 1;
        $payer->setPurgeCount($updatePurgeCount);
        $em = $this->getDoctrine()->getManager();
        $em->persist($payer);

        $em->flush();

        return $this->redirect($this->generateUrl('receive-dashboard'));
    }


    /**
     * @Route("/dashboard/paid/{paymentId}", name="paid-dashboard")
     */
    public function donationPaidAction(Request $request,$paymentId)
    {
        $Donation = $this->getDoctrine()->getRepository('AppBundle:Donation');
        $Payment = $this->getDoctrine()->getRepository('AppBundle:Payment');

        $Reservation = $this->getDoctrine()->getRepository('AppBundle:Reservation');
        $user = $this->getUser();

        $payment = $Payment->find($paymentId);



        $package=$user->getPackage();

        //this is the nav variables

        $activeDonation="";
        $activeReservation="";
        $recycle="";
        $userDonation=$Donation->findUserDonation($user);
        $userReservation=$Reservation->findUserReservation($user);

        if(!empty($userDonation)){
            $activeDonation=1;
            $recycle=0;
        }
        if(!empty($userReservation)){
            $activeReservation=1;
            $recycle=0;
        }
        else{
            $recycle=1;
        }


        $donation = $Donation->findToPayDonation($package,3);


        $status = $payment->getStatus();

        $confirmation=0;

        if ($status == 1){

            $confirmation= 1;
        }



        return $this->render('profile/paid.html.twig', array(
            'user' => $user,
            'donation'=>$donation ,
            'confirmation'=>$confirmation,
            'activeDonation'=>$activeDonation,
            'activeReservation'=>$activeReservation,
            'recycle'=>$recycle
        ));
    }


    /**
     * @Route("/plan/notavailable", name="noplan-dashboard")
     */
    public function noPlanAction()
    {

        $Donation= $this->getDoctrine()->getRepository('AppBundle:Donation');
        $Reservation = $this->getDoctrine()->getRepository('AppBundle:Reservation');
        $user = $this->getUser();
        //this is the nav variables

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


        return $this->render('default/noplan.html.twig', array(
            'activeDonation'=>$activeDonation,
            'activeReservation'=>$activeReservation,
            'recycle'=>$recycle
        ));
    }

}