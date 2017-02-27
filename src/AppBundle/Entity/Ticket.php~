<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 * @ORM\Table(name="tickets")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TicketRepository")
 */

class Ticket
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $title;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $phone;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $email;
    /**
     * @ORM\Column(type="text",nullable=false)
     */
    protected $description;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    protected $updatedAt;


    /**
     * @ORM\Column(type="string")
     *
     */
    protected $status;
    /**
     * @ORM\Column(type="smallint")
     *
     */
    protected $open;
    /**
     * @ORM\Column(type="smallint")
     *
     */
    protected $replied;

    /**
     * @ORM\Column(type="smallint")
     *
     */
    protected $visible;

    /**
     * @ORM\Column(type="datetime",nullable=false)
     *
     */
    protected $posted;

    /**
     * @ORM\ManyToOne(targetEntity="Participant", inversedBy="ticket")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $participant;

    /**
     *  @ORM\OneToMany(targetEntity="Reply", mappedBy="ticket")
     */
    protected $reply;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reply = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     *
     * @return Ticket
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Ticket
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Ticket
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Ticket
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Set visible
     *
     * @param integer $visible
     *
     * @return Ticket
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return integer
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set participant
     *
     * @param \AppBundle\Entity\Participant $participant
     *
     * @return Ticket
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
     * Add reply
     *
     * @param \AppBundle\Entity\Reply $reply
     *
     * @return Ticket
     */
    public function addReply(\AppBundle\Entity\Reply $reply)
    {
        $this->reply[] = $reply;

        return $this;
    }

    /**
     * Remove reply
     *
     * @param \AppBundle\Entity\Reply $reply
     */
    public function removeReply(\AppBundle\Entity\Reply $reply)
    {
        $this->reply->removeElement($reply);
    }

    /**
     * Get reply
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * Set open
     *
     * @param integer $open
     *
     * @return Ticket
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get open
     *
     * @return integer
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Ticket
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Ticket
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set posted
     *
     * @param \DateTime $posted
     *
     * @return Ticket
     */
    public function setPosted($posted)
    {
        $this->posted = $posted;

        return $this;
    }

    /**
     * Get posted
     *
     * @return \DateTime
     */
    public function getPosted()
    {
        return $this->posted;
    }

    /**
     * Set replied
     *
     * @param integer $replied
     *
     * @return Ticket
     */
    public function setReplied($replied)
    {
        $this->replied = $replied;

        return $this;
    }

    /**
     * Get replied
     *
     * @return integer
     */
    public function getReplied()
    {
        return $this->replied;
    }
}
