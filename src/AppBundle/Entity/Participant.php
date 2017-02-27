<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="participants")
 * @UniqueEntity(fields = "username", targetClass = "AppBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "AppBundle\Entity\User", message="fos_user.email.already_used")
 */
class Participant extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->roles = array('ROLE_PARTICIPANT');
        $this->payment = new ArrayCollection();
        $this->ticket = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $firstName;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string", length=100,nullable=false)
     */
    protected $phone;

    /**
     * @ORM\Column(type="string", length=100,nullable=false)
     */
    protected $bank;
    /**
     * @ORM\Column(type="string", length=100,nullable=false)
     */
    protected $accountName;
    /**
     * @ORM\Column(type="integer", length=10,nullable=false)
     */
    protected $accountNumber;


    /**
     * @ORM\Column(type="integer",nullable=true, options={"unsigned":true, "default":0})
     */
    protected $basicCount;
    /**
     * @ORM\Column(type="integer",nullable=true, options={"unsigned":true, "default":0})
     */
    protected $standardCount;
    /**
     * @ORM\Column(type="integer",nullable=true, options={"unsigned":true, "default":0})
     */
    protected $premiumCount;
    /**
     * @ORM\Column(type="integer",nullable=true, options={"unsigned":true, "default":0})
     */
    protected $silverCount;
    /**
     * @ORM\Column(type="integer",nullable=true, options={"unsigned":true, "default":0})
     */
    protected $purgeCount;
    /**
     * @ORM\Column(type="smallint",nullable=true, options={"unsigned":true, "default":0})
     */
    protected $updated;



    /**
     *  @ORM\OneToMany(targetEntity="Payment", mappedBy="participant")
     */
    protected $payment;

    /**
     *  @ORM\OneToMany(targetEntity="Payment", mappedBy="participant")
     */
    protected $reservation;

    /**
     *  @ORM\OneToMany(targetEntity="Ticket", mappedBy="participant")
     */
    protected $ticket;

    /**
     *  @ORM\OneToMany(targetEntity="Donation", mappedBy="participant")
     */
    protected $donation;

    /**
     * @ORM\ManyToOne(targetEntity="Package", inversedBy="participant")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $package;

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Participant
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Participant
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set bank
     *
     * @param string $bank
     *
     * @return Participant
     */
    public function setBank($bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set accountName
     *
     * @param string $accountName
     *
     * @return Participant
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Get accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set accountNumber
     *
     * @param integer $accountNumber
     *
     * @return Participant
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }



    /**
     * Set updated
     *
     * @param integer $updated
     *
     * @return Participant
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Add payment
     *
     * @param \AppBundle\Entity\Participant $payment
     *
     * @return Participant
     */
    public function addPayment(\AppBundle\Entity\Participant $payment)
    {
        $this->payment[] = $payment;

        return $this;
    }

    /**
     * Remove payment
     *
     * @param \AppBundle\Entity\Participant $payment
     */
    public function removePayment(\AppBundle\Entity\Participant $payment)
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
     * Add ticket
     *
     * @param \AppBundle\Entity\Participant $ticket
     *
     * @return Participant
     */
    public function addTicket(\AppBundle\Entity\Participant $ticket)
    {
        $this->ticket[] = $ticket;

        return $this;
    }

    /**
     * Remove ticket
     *
     * @param \AppBundle\Entity\Participant $ticket
     */
    public function removeTicket(\AppBundle\Entity\Participant $ticket)
    {
        $this->ticket->removeElement($ticket);
    }

    /**
     * Get ticket
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTicket()
    {
        return $this->ticket;
    }


    /**
     * Add package
     *
     * @param \AppBundle\Entity\Package $package
     *
     * @return Participant
     */
    public function addPackage(\AppBundle\Entity\Package $package)
    {
        $this->package[] = $package;

        return $this;
    }

    /**
     * Remove package
     *
     * @param \AppBundle\Entity\Package $package
     */
    public function removePackage(\AppBundle\Entity\Package $package)
    {
        $this->package->removeElement($package);
    }

    /**
     * Get package
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Set package
     *
     * @param \AppBundle\Entity\Package $package
     *
     * @return Participant
     */
    public function setPackage(\AppBundle\Entity\Package $package = null)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Get donationCount
     *
     * @return integer
     */
    public function getDonationCount()
    {
        return $this->donationCount;
    }

    /**
     * Add donation
     *
     * @param \AppBundle\Entity\Donation $donation
     *
     * @return Participant
     */
    public function addDonation(\AppBundle\Entity\Donation $donation)
    {
        $this->donation[] = $donation;

        return $this;
    }

    /**
     * Remove donation
     *
     * @param \AppBundle\Entity\Donation $donation
     */
    public function removeDonation(\AppBundle\Entity\Donation $donation)
    {
        $this->donation->removeElement($donation);
    }

    /**
     * Get donation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDonation()
    {
        return $this->donation;
    }

    /**
     * Add reservation
     *
     * @param \AppBundle\Entity\Payment $reservation
     *
     * @return Participant
     */
    public function addReservation(\AppBundle\Entity\Payment $reservation)
    {
        $this->reservation[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \AppBundle\Entity\Payment $reservation
     */
    public function removeReservation(\AppBundle\Entity\Payment $reservation)
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

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Participant
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Get accountNumber
     *
     * @return integer
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Set basicCount
     *
     * @param integer $basicCount
     *
     * @return Participant
     */
    public function setBasicCount($basicCount)
    {
        $this->basicCount = $basicCount;

        return $this;
    }

    /**
     * Get basicCount
     *
     * @return integer
     */
    public function getBasicCount()
    {
        return $this->basicCount;
    }

    /**
     * Set standardCount
     *
     * @param integer $standardCount
     *
     * @return Participant
     */
    public function setStandardCount($standardCount)
    {
        $this->standardCount = $standardCount;

        return $this;
    }

    /**
     * Get standardCount
     *
     * @return integer
     */
    public function getStandardCount()
    {
        return $this->standardCount;
    }

    /**
     * Set premiumCount
     *
     * @param integer $premiumCount
     *
     * @return Participant
     */
    public function setPremiumCount($premiumCount)
    {
        $this->premiumCount = $premiumCount;

        return $this;
    }

    /**
     * Get premiumCount
     *
     * @return integer
     */
    public function getPremiumCount()
    {
        return $this->premiumCount;
    }

    /**
     * Set silverCount
     *
     * @param integer $silverCount
     *
     * @return Participant
     */
    public function setSilverCount($silverCount)
    {
        $this->silverCount = $silverCount;

        return $this;
    }

    /**
     * Get silverCount
     *
     * @return integer
     */
    public function getSilverCount()
    {
        return $this->silverCount;
    }

    /**
     * Set purgeCount
     *
     * @param integer $purgeCount
     *
     * @return Participant
     */
    public function setPurgeCount($purgeCount)
    {
        $this->purgeCount = $purgeCount;

        return $this;
    }

    /**
     * Get purgeCount
     *
     * @return integer
     */
    public function getPurgeCount()
    {
        return $this->purgeCount;
    }
}
