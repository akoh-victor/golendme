<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="donations")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DonationRepository")
 *  @Vich\Uploadable
 */
class  Donation
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=false, options={"comment":" package value"})
     *
     */
    protected $value;
    /**
     * @ORM\Column(type="integer", nullable=false, options={"comment":" total received payment for that donation"})
     *
     */
    protected $received;
    /**
     * @ORM\Column(type="integer", nullable=false, options={"comment":" Amount to be paid"})
     *
     */
    protected $reward;

    /**
     * @ORM\Column(type="string", nullable=false)
     *
     */
    protected $paymentCount;
    /**
     * @ORM\Column(type="integer",nullable=true, options={"unsigned":false, "default":2})
     */
    protected $allowedPayment;

    /**
     * @ORM\Column(type="string", nullable=false)
     *
     */
    protected $reserveCount;

    /**
     * @ORM\Column(type="string", nullable=false, options={"comment":" if donation is complete disable it"})
     *
     */
    protected $status;

    /**
     * @ORM\Column(type="smallint", nullable=false)
     */
    protected $complete;

    // relships are
    // reciever
    //donator


    /**
     *  @ORM\OneToMany(targetEntity="Payment", mappedBy="donation")
     */
    protected $payment;
    /**
     *  @ORM\OneToMany(targetEntity="Reservation", mappedBy="donation")
     */
    protected $reservation;

    /**
     * @ORM\ManyToOne(targetEntity="Participant", inversedBy="donation")
     * @ORM\JoinColumn(name="receiver_id",referencedColumnName="id" )
     */
    protected $participant;

    /**
     * @ORM\ManyToOne(targetEntity="Package", inversedBy="donation")
     * @ORM\JoinColumn(name="package_id",referencedColumnName="id" )
     */
    protected $package;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->payment = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param integer $value
     *
     * @return Donation
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set reward
     *
     * @param integer $reward
     *
     * @return Donation
     */
    public function setReward($reward)
    {
        $this->reward = $reward;

        return $this;
    }

    /**
     * Get reward
     *
     * @return integer
     */
    public function getReward()
    {
        return $this->reward;
    }

    /**
     * Set paymentCount
     *
     * @param string $paymentCount
     *
     * @return Donation
     */
    public function setPaymentCount($paymentCount)
    {
        $this->paymentCount = $paymentCount;

        return $this;
    }

    /**
     * Get paymentCount
     *
     * @return string
     */
    public function getPaymentCount()
    {
        return $this->paymentCount;
    }

    /**
     * Set reserveCount
     *
     * @param string $reserveCount
     *
     * @return Donation
     */
    public function setReserveCount($reserveCount)
    {
        $this->reserveCount = $reserveCount;

        return $this;
    }

    /**
     * Get reserveCount
     *
     * @return string
     */
    public function getReserveCount()
    {
        return $this->reserveCount;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Donation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set complete
     *
     * @param integer $complete
     *
     * @return Donation
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;

        return $this;
    }

    /**
     * Get complete
     *
     * @return integer
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Add payment
     *
     * @param \AppBundle\Entity\Payment $payment
     *
     * @return Donation
     */
    public function addPayment(\AppBundle\Entity\Payment $payment)
    {
        $this->payment[] = $payment;

        return $this;
    }

    /**
     * Remove payment
     *
     * @param \AppBundle\Entity\Payment $payment
     */
    public function removePayment(\AppBundle\Entity\Payment $payment)
    {
        $this->payment->removeElement($payment);
    }

    /**
     * Get payment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set allowedPayment
     *
     * @param integer $allowedPayment
     *
     * @return Donation
     */
    public function setAllowedPayment($allowedPayment)
    {
        $this->allowedPayment = $allowedPayment;

        return $this;
    }

    /**
     * Get allowedPayment
     *
     * @return integer
     */
    public function getAllowedPayment()
    {
        return $this->allowedPayment;
    }

    /**
     * Set received
     *
     * @param integer $received
     *
     * @return Donation
     */
    public function setReceived($received)
    {
        $this->received = $received;

        return $this;
    }

    /**
     * Get received
     *
     * @return integer
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * Set participant
     *
     * @param \AppBundle\Entity\Participant $participant
     *
     * @return Donation
     */
    public function setParticipant(\AppBundle\Entity\Participant $participant = null)
    {
        $this->participant = $participant;

        return $this;
    }

    /**
     * Get participant
     *
     * @return \AppBundle\Entity\Participant
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Set package
     *
     * @param \AppBundle\Entity\Package $package
     *
     * @return Donation
     */
    public function setPackage(\AppBundle\Entity\Package $package = null)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Get package
     *
     * @return \AppBundle\Entity\Package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Add reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     *
     * @return Donation
     */
    public function addReservation(\AppBundle\Entity\Reservation $reservation)
    {
        $this->reservation[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\AppBundle\Entity\Reservation $reservation)
    {
        $this->reservation->removeElement($reservation);
    }

    /**
     * Get reservation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservation()
    {
        return $this->reservation;
    }
}
