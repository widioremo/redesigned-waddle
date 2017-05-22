<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostTypes
 *
 * @ORM\Table(name="post_types")
 * @ORM\Entity
 */
class PostTypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="post_type_name", type="string", nullable=false)
     */
    private $postTypeName;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_type_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $postTypeId;



    /**
     * Set postTypeName
     *
     * @param integer $postTypeName
     *
     * @return PostTypes
     */
    public function setPostTypeName($postTypeName)
    {
        $this->postTypeName = $postTypeName;

        return $this;
    }

    /**
     * Get postTypeName
     *
     * @return integer
     */
    public function getPostTypeName()
    {
        return $this->postTypeName;
    }

    /**
     * Get postTypeId
     *
     * @return integer
     */
    public function getPostTypeId()
    {
        return $this->postTypeId;
    }
}
