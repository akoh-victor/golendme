<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="developers")
 * @UniqueEntity(fields = "username", targetClass = "AppBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "AppBundle\Entity\User", message="fos_user.email.already_used")
 *  @Vich\Uploadable
 */
class Developer extends User
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
        $this->roles = array('ROLE_DEVELOPER');
        $this->property = new ArrayCollection();
    }
    /**
     * @ORM\Column(type="integer",nullable=true, options={"unsigned":true, "default":0})
     */
    protected $login_count;
    /**
     * @ORM\Column(type="smallint",nullable=true, options={"unsigned":true, "default":0})
     */
    protected $updated;

    /**
     * Set loginCount
     *
     * @param integer $loginCount
     *
     * @return Developer
     */
    public function setLoginCount($loginCount)
    {
        $this->login_count = $loginCount;

        return $this;
    }

    /**
     * Get loginCount
     *
     * @return integer
     */
    public function getLoginCount()
    {
        return $this->login_count;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     *
     * @return Developer
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
}
