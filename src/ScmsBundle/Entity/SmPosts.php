<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmPosts
 *
 * @ORM\Table(name="sm_posts", indexes={@ORM\Index(name="post_gallery_id", columns={"post_gallery_id"}), @ORM\Index(name="post_state_id", columns={"post_state_id"}), @ORM\Index(name="post_featured_img_id", columns={"post_featured_img_id"}), @ORM\Index(name="post_cat_id", columns={"post_cat_id"}), @ORM\Index(name="post_type_id", columns={"post_type_id"})})
 * @ORM\Entity
 */
class SmPosts
{
    /**
     * @var string
     *
     * @ORM\Column(name="post_title", type="string", length=20, nullable=false)
     */
    private $postTitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date", type="date", nullable=false)
     */
    private $postDate;

    /**
     * @var string
     *
     * @ORM\Column(name="post_text", type="text", length=65535, nullable=false)
     */
    private $postText;

    /**
     * @var string
     *
     * @ORM\Column(name="post_slug", type="string", length=20, nullable=false)
     */
    private $postSlug;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $postId;

    /**
     * @var \ScmsBundle\Entity\SmPostCategories
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmPostCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_cat_id", referencedColumnName="post_cat_id")
     * })
     */
    private $postCat;

    /**
     * @var \ScmsBundle\Entity\SmImages
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmImages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_featured_img_id", referencedColumnName="img_id")
     * })
     */
    private $postFeaturedImg;

    /**
     * @var \ScmsBundle\Entity\SmGalleries
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmGalleries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_gallery_id", referencedColumnName="gallery_id")
     * })
     */
    private $postGallery;

    /**
     * @var \ScmsBundle\Entity\SmStates
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmStates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_state_id", referencedColumnName="state_id")
     * })
     */
    private $postState;

    /**
     * @var \ScmsBundle\Entity\PostTypes
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\PostTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_type_id", referencedColumnName="post_type_id")
     * })
     */
    private $postType;



    /**
     * Set postTitle
     *
     * @param string $postTitle
     *
     * @return SmPosts
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set postDate
     *
     * @param \DateTime $postDate
     *
     * @return SmPosts
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set postText
     *
     * @param string $postText
     *
     * @return SmPosts
     */
    public function setPostText($postText)
    {
        $this->postText = $postText;

        return $this;
    }

    /**
     * Get postText
     *
     * @return string
     */
    public function getPostText()
    {
        return $this->postText;
    }

    /**
     * Set postSlug
     *
     * @param string $postSlug
     *
     * @return SmPosts
     */
    public function setPostSlug($postSlug)
    {
        $this->postSlug = $postSlug;

        return $this;
    }

    /**
     * Get postSlug
     *
     * @return string
     */
    public function getPostSlug()
    {
        return $this->postSlug;
    }

    /**
     * Get postId
     *
     * @return integer
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set postCat
     *
     * @param \ScmsBundle\Entity\SmPostCategories $postCat
     *
     * @return SmPosts
     */
    public function setPostCat(\ScmsBundle\Entity\SmPostCategories $postCat = null)
    {
        $this->postCat = $postCat;

        return $this;
    }

    /**
     * Get postCat
     *
     * @return \ScmsBundle\Entity\SmPostCategories
     */
    public function getPostCat()
    {
        return $this->postCat;
    }

    /**
     * Set postFeaturedImg
     *
     * @param \ScmsBundle\Entity\SmImages $postFeaturedImg
     *
     * @return SmPosts
     */
    public function setPostFeaturedImg(\ScmsBundle\Entity\SmImages $postFeaturedImg = null)
    {
        $this->postFeaturedImg = $postFeaturedImg;

        return $this;
    }

    /**
     * Get postFeaturedImg
     *
     * @return \ScmsBundle\Entity\SmImages
     */
    public function getPostFeaturedImg()
    {
        return $this->postFeaturedImg;
    }

    /**
     * Set postGallery
     *
     * @param \ScmsBundle\Entity\SmGalleries $postGallery
     *
     * @return SmPosts
     */
    public function setPostGallery(\ScmsBundle\Entity\SmGalleries $postGallery = null)
    {
        $this->postGallery = $postGallery;

        return $this;
    }

    /**
     * Get postGallery
     *
     * @return \ScmsBundle\Entity\SmGalleries
     */
    public function getPostGallery()
    {
        return $this->postGallery;
    }

    /**
     * Set postState
     *
     * @param \ScmsBundle\Entity\SmStates $postState
     *
     * @return SmPosts
     */
    public function setPostState(\ScmsBundle\Entity\SmStates $postState = null)
    {
        $this->postState = $postState;

        return $this;
    }

    /**
     * Get postState
     *
     * @return \ScmsBundle\Entity\SmStates
     */
    public function getPostState()
    {
        return $this->postState;
    }

    /**
     * Set postType
     *
     * @param \ScmsBundle\Entity\PostTypes $postType
     *
     * @return SmPosts
     */
    public function setPostType(\ScmsBundle\Entity\PostTypes $postType = null)
    {
        $this->postType = $postType;

        return $this;
    }

    /**
     * Get postType
     *
     * @return \ScmsBundle\Entity\PostTypes
     */
    public function getPostType()
    {
        return $this->postType;
    }
}
