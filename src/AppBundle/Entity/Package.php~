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
 * @ORM\Table(name="packages")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PackagesRepository")
 *  @Vich\Uploadable
 */
class  Package
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
     * @ORM\Column(type="string", nullable=false)
     */
    protected $name;


    /**
     * @ORM\Column(type="string", nullable=false)
     *
     */
    protected $reserveCount;



    /**
     *  @ORM\OneToMany(targetEntity="Participant", mappedBy="package")
     */
    protected $participant;


    /**
     *  @ORM\OneToMany(targetEntity="Donation", mappedBy="package")
     */
    protected $donation;



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
     * @return Package
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
     * Set name
     *
     * @param integer $name
     *
     * @return Package
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return integer
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set reserveCount
     *
     * @param string $reserveCount
     *
     * @return Package
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
     * Set participant
     *
     * @param \AppBundle\Entity\Participant $participant
     *
     * @return Package
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
     * Constructor
     */
    public function __construct()
    {
        $this->participant = new \Doctrine\Common\Collections\ArrayCollection();
        $this->donation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add participant
     *
     * @param \AppBundle\Entity\Participant $participant
     *
     * @return Package
     */
    public function addParticipant(\AppBundle\Entity\Participant $participant)
    {
        $this->participant[] = $participant;

        return $this;
    }

    /**
     * Remove participant
     *
     * @param \AppBundle\Entity\Participant $participant
     */
    public function removeParticipant(\AppBundle\Entity\Participant $participant)
    {
        $this->participant->removeElement($participant);
    }

    /**
     * Add donation
     *
     * @param \AppBundle\Entity\Donation $donation
     *
     * @return Package
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
}
