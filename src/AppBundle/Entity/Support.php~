<?php

namespace AppBundle\Entity;

use Vich\UploaderBundle\Mapping\Annotation as Vich;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="supports")
 * @UniqueEntity(fields = "username", targetClass = "AppBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "AppBundle\Entity\User", message="fos_user.email.already_used")
 */
class Support extends User
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
        $this->roles = array('ROLE_SUPPORT');
    }


}
