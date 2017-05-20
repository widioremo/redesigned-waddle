<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmPostCategories
 *
 * @ORM\Table(name="sm_post_categories", indexes={@ORM\Index(name="post_cat_img_id", columns={"post_cat_img_id"}), @ORM\Index(name="post_cat_img_id_2", columns={"post_cat_img_id"})})
 * @ORM\Entity
 */
class SmPostCategories
{
    /**
     * @var string
     *
     * @ORM\Column(name="post_cat_name", type="string", length=20, nullable=false)
     */
    private $postCatName;

    /**
     * @var string
     *
     * @ORM\Column(name="post_cat_deascription", type="text", length=65535, nullable=false)
     */
    private $postCatDeascription;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_cat_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $postCatId;

    /**
     * @var \ScmsBundle\Entity\SmImages
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmImages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_cat_img_id", referencedColumnName="img_id")
     * })
     */
    private $postCatImg;



    /**
     * Set postCatName
     *
     * @param string $postCatName
     *
     * @return SmPostCategories
     */
    public function setPostCatName($postCatName)
    {
        $this->postCatName = $postCatName;

        return $this;
    }

    /**
     * Get postCatName
     *
     * @return string
     */
    public function getPostCatName()
    {
        return $this->postCatName;
    }

    /**
     * Set postCatDeascription
     *
     * @param string $postCatDeascription
     *
     * @return SmPostCategories
     */
    public function setPostCatDeascription($postCatDeascription)
    {
        $this->postCatDeascription = $postCatDeascription;

        return $this;
    }

    /**
     * Get postCatDeascription
     *
     * @return string
     */
    public function getPostCatDeascription()
    {
        return $this->postCatDeascription;
    }

    /**
     * Get postCatId
     *
     * @return integer
     */
    public function getPostCatId()
    {
        return $this->postCatId;
    }

    /**
     * Set postCatImg
     *
     * @param \ScmsBundle\Entity\SmImages $postCatImg
     *
     * @return SmPostCategories
     */
    public function setPostCatImg(\ScmsBundle\Entity\SmImages $postCatImg = null)
    {
        $this->postCatImg = $postCatImg;

        return $this;
    }

    /**
     * Get postCatImg
     *
     * @return \ScmsBundle\Entity\SmImages
     */
    public function getPostCatImg()
    {
        return $this->postCatImg;
    }
}
