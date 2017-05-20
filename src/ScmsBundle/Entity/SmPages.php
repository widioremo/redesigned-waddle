<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmPages
 *
 * @ORM\Table(name="sm_pages", indexes={@ORM\Index(name="page_state", columns={"page_state_id"}), @ORM\Index(name="page_featured_img_id", columns={"page_featured_img_id"}), @ORM\Index(name="page_template_id", columns={"page_template_id"})})
 * @ORM\Entity
 */
class SmPages
{
    /**
     * @var string
     *
     * @ORM\Column(name="page_title", type="string", length=20, nullable=false)
     */
    private $pageTitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="page_create_date", type="date", nullable=false)
     */
    private $pageCreateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="page_text", type="text", length=65535, nullable=false)
     */
    private $pageText;

    /**
     * @var integer
     *
     * @ORM\Column(name="page_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pageId;

    /**
     * @var \ScmsBundle\Entity\SmStates
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmStates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_state_id", referencedColumnName="state_id")
     * })
     */
    private $pageState;

    /**
     * @var \ScmsBundle\Entity\SmImages
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmImages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_featured_img_id", referencedColumnName="img_id")
     * })
     */
    private $pageFeaturedImg;

    /**
     * @var \ScmsBundle\Entity\SmTemplates
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmTemplates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_template_id", referencedColumnName="template_id")
     * })
     */
    private $pageTemplate;



    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     *
     * @return SmPages
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set pageCreateDate
     *
     * @param \DateTime $pageCreateDate
     *
     * @return SmPages
     */
    public function setPageCreateDate($pageCreateDate)
    {
        $this->pageCreateDate = $pageCreateDate;

        return $this;
    }

    /**
     * Get pageCreateDate
     *
     * @return \DateTime
     */
    public function getPageCreateDate()
    {
        return $this->pageCreateDate;
    }

    /**
     * Set pageText
     *
     * @param string $pageText
     *
     * @return SmPages
     */
    public function setPageText($pageText)
    {
        $this->pageText = $pageText;

        return $this;
    }

    /**
     * Get pageText
     *
     * @return string
     */
    public function getPageText()
    {
        return $this->pageText;
    }

    /**
     * Get pageId
     *
     * @return integer
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * Set pageState
     *
     * @param \ScmsBundle\Entity\SmStates $pageState
     *
     * @return SmPages
     */
    public function setPageState(\ScmsBundle\Entity\SmStates $pageState = null)
    {
        $this->pageState = $pageState;

        return $this;
    }

    /**
     * Get pageState
     *
     * @return \ScmsBundle\Entity\SmStates
     */
    public function getPageState()
    {
        return $this->pageState;
    }

    /**
     * Set pageFeaturedImg
     *
     * @param \ScmsBundle\Entity\SmImages $pageFeaturedImg
     *
     * @return SmPages
     */
    public function setPageFeaturedImg(\ScmsBundle\Entity\SmImages $pageFeaturedImg = null)
    {
        $this->pageFeaturedImg = $pageFeaturedImg;

        return $this;
    }

    /**
     * Get pageFeaturedImg
     *
     * @return \ScmsBundle\Entity\SmImages
     */
    public function getPageFeaturedImg()
    {
        return $this->pageFeaturedImg;
    }

    /**
     * Set pageTemplate
     *
     * @param \ScmsBundle\Entity\SmTemplates $pageTemplate
     *
     * @return SmPages
     */
    public function setPageTemplate(\ScmsBundle\Entity\SmTemplates $pageTemplate = null)
    {
        $this->pageTemplate = $pageTemplate;

        return $this;
    }

    /**
     * Get pageTemplate
     *
     * @return \ScmsBundle\Entity\SmTemplates
     */
    public function getPageTemplate()
    {
        return $this->pageTemplate;
    }
}
