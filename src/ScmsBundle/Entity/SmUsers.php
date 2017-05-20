<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmUsers
 *
 * @ORM\Table(name="sm_users", indexes={@ORM\Index(name="usr_role_id", columns={"usr_role_id"})})
 * @ORM\Entity
 */
class SmUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="usr_name", type="string", length=20, nullable=false)
     */
    private $usrName;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_secret", type="string", length=20, nullable=false)
     */
    private $usrSecret;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_email", type="string", length=20, nullable=false)
     */
    private $usrEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_recover_code", type="string", length=20, nullable=false)
     */
    private $usrRecoverCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usrId;

    /**
     * @var \ScmsBundle\Entity\UserRoles
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\UserRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usr_role_id", referencedColumnName="user_role_id")
     * })
     */
    private $usrRole;



    /**
     * Set usrName
     *
     * @param string $usrName
     *
     * @return SmUsers
     */
    public function setUsrName($usrName)
    {
        $this->usrName = $usrName;

        return $this;
    }

    /**
     * Get usrName
     *
     * @return string
     */
    public function getUsrName()
    {
        return $this->usrName;
    }

    /**
     * Set usrSecret
     *
     * @param string $usrSecret
     *
     * @return SmUsers
     */
    public function setUsrSecret($usrSecret)
    {
        $this->usrSecret = $usrSecret;

        return $this;
    }

    /**
     * Get usrSecret
     *
     * @return string
     */
    public function getUsrSecret()
    {
        return $this->usrSecret;
    }

    /**
     * Set usrEmail
     *
     * @param string $usrEmail
     *
     * @return SmUsers
     */
    public function setUsrEmail($usrEmail)
    {
        $this->usrEmail = $usrEmail;

        return $this;
    }

    /**
     * Get usrEmail
     *
     * @return string
     */
    public function getUsrEmail()
    {
        return $this->usrEmail;
    }

    /**
     * Set usrRecoverCode
     *
     * @param string $usrRecoverCode
     *
     * @return SmUsers
     */
    public function setUsrRecoverCode($usrRecoverCode)
    {
        $this->usrRecoverCode = $usrRecoverCode;

        return $this;
    }

    /**
     * Get usrRecoverCode
     *
     * @return string
     */
    public function getUsrRecoverCode()
    {
        return $this->usrRecoverCode;
    }

    /**
     * Get usrId
     *
     * @return integer
     */
    public function getUsrId()
    {
        return $this->usrId;
    }

    /**
     * Set usrRole
     *
     * @param \ScmsBundle\Entity\UserRoles $usrRole
     *
     * @return SmUsers
     */
    public function setUsrRole(\ScmsBundle\Entity\UserRoles $usrRole = null)
    {
        $this->usrRole = $usrRole;

        return $this;
    }

    /**
     * Get usrRole
     *
     * @return \ScmsBundle\Entity\UserRoles
     */
    public function getUsrRole()
    {
        return $this->usrRole;
    }
}
