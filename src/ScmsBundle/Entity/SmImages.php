<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmImages
 *
 * @ORM\Table(name="sm_images", indexes={@ORM\Index(name="img_gal_id", columns={"img_gal_id"})})
 * @ORM\Entity
 */
class SmImages
{
    /**
     * @var string
     *
     * @ORM\Column(name="img_name", type="string", length=20, nullable=false)
     */
    private $imgName;

    /**
     * @var string
     *
     * @ORM\Column(name="img_ext", type="string", length=20, nullable=false)
     */
    private $imgExt;

    /**
     * @var integer
     *
     * @ORM\Column(name="img_category", type="integer", nullable=false)
     */
    private $imgCategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="img_caption", type="integer", nullable=false)
     */
    private $imgCaption;

    /**
     * @var integer
     *
     * @ORM\Column(name="img_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imgId;

    /**
     * @var \ScmsBundle\Entity\SmGalleries
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmGalleries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="img_gal_id", referencedColumnName="gallery_id")
     * })
     */
    private $imgGal;



    /**
     * Set imgName
     *
     * @param string $imgName
     *
     * @return SmImages
     */
    public function setImgName($imgName)
    {
        $this->imgName = $imgName;

        return $this;
    }

    /**
     * Get imgName
     *
     * @return string
     */
    public function getImgName()
    {
        return $this->imgName;
    }

    /**
     * Set imgExt
     *
     * @param string $imgExt
     *
     * @return SmImages
     */
    public function setImgExt($imgExt)
    {
        $this->imgExt = $imgExt;

        return $this;
    }

    /**
     * Get imgExt
     *
     * @return string
     */
    public function getImgExt()
    {
        return $this->imgExt;
    }

    /**
     * Set imgCategory
     *
     * @param integer $imgCategory
     *
     * @return SmImages
     */
    public function setImgCategory($imgCategory)
    {
        $this->imgCategory = $imgCategory;

        return $this;
    }

    /**
     * Get imgCategory
     *
     * @return integer
     */
    public function getImgCategory()
    {
        return $this->imgCategory;
    }

    /**
     * Set imgCaption
     *
     * @param integer $imgCaption
     *
     * @return SmImages
     */
    public function setImgCaption($imgCaption)
    {
        $this->imgCaption = $imgCaption;

        return $this;
    }

    /**
     * Get imgCaption
     *
     * @return integer
     */
    public function getImgCaption()
    {
        return $this->imgCaption;
    }

    /**
     * Get imgId
     *
     * @return integer
     */
    public function getImgId()
    {
        return $this->imgId;
    }

    /**
     * Set imgGal
     *
     * @param \ScmsBundle\Entity\SmGalleries $imgGal
     *
     * @return SmImages
     */
    public function setImgGal(\ScmsBundle\Entity\SmGalleries $imgGal = null)
    {
        $this->imgGal = $imgGal;

        return $this;
    }

    /**
     * Get imgGal
     *
     * @return \ScmsBundle\Entity\SmGalleries
     */
    public function getImgGal()
    {
        return $this->imgGal;
    }
}
