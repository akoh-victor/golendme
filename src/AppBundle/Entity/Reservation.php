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
 * @ORM\Table(name="reservations")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 *  @Vich\Uploadable
 */
class  Reservation
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     *
     */
    protected $status;

    /**
     * @ORM\Column(type="smallint", nullable=false)
     *
     */
    protected $enabled;

    /**
     * @ORM\Column(type="integer", nullable=false)
     *
     */
    protected $pay;
    /**
     * @ORM\Column(type="integer", nullable=false)
     *
     */
    protected $delet;


    /**
     * @ORM\Column(type="datetime")
     * date created
     */
    protected $created;
    /**
     * @ORM\ManyToOne(targetEntity="Participant", inversedBy="reservation")
     * @ORM\JoinColumn(name="payer_id",referencedColumnName="id")
     */
    protected $payer;

    /**
     * @ORM\ManyToOne(targetEntity="Donation", inversedBy="reservation")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $donation;




    /**
     *  @ORM\OneToMany(targetEntity="Payment", mappedBy="reservation")
     */
    protected $payment;



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
     * Set status
     *
     * @param string $status
     *
     * @return Reservation
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
     * Set enabled
     *
     * @param integer $enabled
     *
     * @return Reservation
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Reservation
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
     * Set payer
     *
     * @param \AppBundle\Entity\Participant $payer
     *
     * @return Reservation
     */
    public function setPayer(\AppBundle\Entity\Participant $payer = null)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get payer
     *
     * @return \AppBundle\Entity\Participant
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Set donation
     *
     * @param \AppBundle\Entity\Donation $donation
     *
     * @return Reservation
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
     * Add payment
     *
     * @param \AppBundle\Entity\Payment $payment
     *
     * @return Reservation
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
     * Set pay
     *
     * @param string $pay
     *
     * @return Reservation
     */
    public function setPay($pay)
    {
        $this->pay = $pay;

        return $this;
    }

    /**
     * Get pay
     *
     * @return string
     */
    public function getPay()
    {
        return $this->pay;
    }



    /**
     * Set delet
     *
     * @param integer $delet
     *
     * @return Reservation
     */
    public function setDelet($delet)
    {
        $this->delet = $delet;

        return $this;
    }

    /**
     * Get delet
     *
     * @return integer
     */
    public function getDelet()
    {
        return $this->delet;
    }
}
