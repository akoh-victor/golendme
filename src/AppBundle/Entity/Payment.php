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
 * @ORM\Table(name="payments")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaymentsRepository")
 *  @Vich\Uploadable
 */
class  Payment
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=false, options={"comment":"mode of payment"})
     *
     */
    protected $modeofPayment;


    /**
     * @ORM\Column(type="integer", nullable=false, options={"comment":" Amount in Naira"})
     *
     */
    protected $amount;
    /**
     * @ORM\Column(type="text", nullable=false, options={"comment":"how was the payment made"})
     *
     */
    protected $payer;
    /**
     * @ORM\Column(type="string", nullable=false)
     *
     */
    protected $status;


    /**
     * @ORM\Column(type="datetime")
     * date created
     */
    protected $created;
    /**
     * @ORM\ManyToOne(targetEntity="Participant", inversedBy="payment")
     * @ORM\JoinColumn(name="payer_id",referencedColumnName="id")
     */
    protected $participant;

    /**
     * @ORM\ManyToOne(targetEntity="Donation", inversedBy="payment")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $donation;

    /**
     * @ORM\ManyToOne(targetEntity="Reservation", inversedBy="payment")
     * @ORM\JoinColumn(name="reservation_id",referencedColumnName="id" )
     */
    protected $reservation;




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
     * Set modeofPayment
     *
     * @param string $modeofPayment
     *
     * @return Payment
     */
    public function setModeofPayment($modeofPayment)
    {
        $this->modeofPayment = $modeofPayment;

        return $this;
    }

    /**
     * Get modeofPayment
     *
     * @return string
     */
    public function getModeofPayment()
    {
        return $this->modeofPayment;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return Payment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set payer
     *
     * @param string $payer
     *
     * @return Payment
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get payer
     *
     * @return string
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Payment
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Payment
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set participant
     *
     * @param \AppBundle\Entity\Participant $participant
     *
     * @return Payment
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
     * Set donation
     *
     * @param \AppBundle\Entity\Donation $donation
     *
     * @return Payment
     */
    public function setDonation(\AppBundle\Entity\Donation $donation = null)
    {
        $this->donation = $donation;

        return $this;
    }

    /**
     * Get donation
     *
     * @return \AppBundle\Entity\Donation
     */
    public function getDonation()
    {
        return $this->donation;
    }

    /**
     * Set reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     *
     * @return Payment
     */
    public function setReservation(\AppBundle\Entity\Reservation $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \AppBundle\Entity\Reservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }
}
