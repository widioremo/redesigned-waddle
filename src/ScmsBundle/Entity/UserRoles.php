<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoles
 *
 * @ORM\Table(name="user_roles")
 * @ORM\Entity
 */
class UserRoles
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_role_name", type="string", length=20, nullable=false)
     */
    private $userRoleName;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_role_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userRoleId;



    /**
     * Set userRoleName
     *
     * @param string $userRoleName
     *
     * @return UserRoles
     */
    public function setUserRoleName($userRoleName)
    {
        $this->userRoleName = $userRoleName;

        return $this;
    }

    /**
     * Get userRoleName
     *
     * @return string
     */
    public function getUserRoleName()
    {
        return $this->userRoleName;
    }

    /**
     * Get userRoleId
     *
     * @return integer
     */
    public function getUserRoleId()
    {
        return $this->userRoleId;
    }
}
