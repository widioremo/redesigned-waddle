<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmGalleries
 *
 * @ORM\Table(name="sm_galleries")
 * @ORM\Entity
 */
class SmGalleries
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gallery_date", type="datetime", nullable=false)
     */
    private $galleryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="gallery_name", type="string", length=20, nullable=false)
     */
    private $galleryName;

    /**
     * @var string
     *
     * @ORM\Column(name="gallery_description", type="text", length=16777215, nullable=false)
     */
    private $galleryDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="gallery_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $galleryId;



    /**
     * Set galleryDate
     *
     * @param \DateTime $galleryDate
     *
     * @return SmGalleries
     */
    public function setGalleryDate($galleryDate)
    {
        $this->galleryDate = $galleryDate;

        return $this;
    }

    /**
     * Get galleryDate
     *
     * @return \DateTime
     */
    public function getGalleryDate()
    {
        return $this->galleryDate;
    }

    /**
     * Set galleryName
     *
     * @param string $galleryName
     *
     * @return SmGalleries
     */
    public function setGalleryName($galleryName)
    {
        $this->galleryName = $galleryName;

        return $this;
    }

    /**
     * Get galleryName
     *
     * @return string
     */
    public function getGalleryName()
    {
        return $this->galleryName;
    }

    /**
     * Set galleryDescription
     *
     * @param string $galleryDescription
     *
     * @return SmGalleries
     */
    public function setGalleryDescription($galleryDescription)
    {
        $this->galleryDescription = $galleryDescription;

        return $this;
    }

    /**
     * Get galleryDescription
     *
     * @return string
     */
    public function getGalleryDescription()
    {
        return $this->galleryDescription;
    }

    /**
     * Get galleryId
     *
     * @return integer
     */
    public function getGalleryId()
    {
        return $this->galleryId;
    }
}
