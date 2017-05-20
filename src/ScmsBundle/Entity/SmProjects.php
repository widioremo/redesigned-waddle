<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmProjects
 *
 * @ORM\Table(name="sm_projects", indexes={@ORM\Index(name="project_gallery_id", columns={"project_gallery_id"}), @ORM\Index(name="project_cat_id", columns={"project_cat_id"}), @ORM\Index(name="project_featured_img_id", columns={"project_featured_img_id"}), @ORM\Index(name="project_status_id", columns={"project_status_id"}), @ORM\Index(name="proj_user_id", columns={"proj_user_id"})})
 * @ORM\Entity
 */
class SmProjects
{
    /**
     * @var string
     *
     * @ORM\Column(name="project_title", type="string", length=11, nullable=false)
     */
    private $projectTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="project_text", type="text", length=65535, nullable=false)
     */
    private $projectText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="project_date", type="datetime", nullable=false)
     */
    private $projectDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="project_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projectId;

    /**
     * @var \ScmsBundle\Entity\SmUsers
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proj_user_id", referencedColumnName="usr_id")
     * })
     */
    private $projUser;

    /**
     * @var \ScmsBundle\Entity\SmGalleries
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmGalleries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_gallery_id", referencedColumnName="gallery_id")
     * })
     */
    private $projectGallery;

    /**
     * @var \ScmsBundle\Entity\SmProjCategories
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmProjCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_cat_id", referencedColumnName="proj_cat_id")
     * })
     */
    private $projectCat;

    /**
     * @var \ScmsBundle\Entity\SmImages
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmImages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_featured_img_id", referencedColumnName="img_id")
     * })
     */
    private $projectFeaturedImg;

    /**
     * @var \ScmsBundle\Entity\SmStates
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmStates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_status_id", referencedColumnName="state_id")
     * })
     */
    private $projectStatus;



    /**
     * Set projectTitle
     *
     * @param string $projectTitle
     *
     * @return SmProjects
     */
    public function setProjectTitle($projectTitle)
    {
        $this->projectTitle = $projectTitle;

        return $this;
    }

    /**
     * Get projectTitle
     *
     * @return string
     */
    public function getProjectTitle()
    {
        return $this->projectTitle;
    }

    /**
     * Set projectText
     *
     * @param string $projectText
     *
     * @return SmProjects
     */
    public function setProjectText($projectText)
    {
        $this->projectText = $projectText;

        return $this;
    }

    /**
     * Get projectText
     *
     * @return string
     */
    public function getProjectText()
    {
        return $this->projectText;
    }

    /**
     * Set projectDate
     *
     * @param \DateTime $projectDate
     *
     * @return SmProjects
     */
    public function setProjectDate($projectDate)
    {
        $this->projectDate = $projectDate;

        return $this;
    }

    /**
     * Get projectDate
     *
     * @return \DateTime
     */
    public function getProjectDate()
    {
        return $this->projectDate;
    }

    /**
     * Get projectId
     *
     * @return integer
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set projUser
     *
     * @param \ScmsBundle\Entity\SmUsers $projUser
     *
     * @return SmProjects
     */
    public function setProjUser(\ScmsBundle\Entity\SmUsers $projUser = null)
    {
        $this->projUser = $projUser;

        return $this;
    }

    /**
     * Get projUser
     *
     * @return \ScmsBundle\Entity\SmUsers
     */
    public function getProjUser()
    {
        return $this->projUser;
    }

    /**
     * Set projectGallery
     *
     * @param \ScmsBundle\Entity\SmGalleries $projectGallery
     *
     * @return SmProjects
     */
    public function setProjectGallery(\ScmsBundle\Entity\SmGalleries $projectGallery = null)
    {
        $this->projectGallery = $projectGallery;

        return $this;
    }

    /**
     * Get projectGallery
     *
     * @return \ScmsBundle\Entity\SmGalleries
     */
    public function getProjectGallery()
    {
        return $this->projectGallery;
    }

    /**
     * Set projectCat
     *
     * @param \ScmsBundle\Entity\SmProjCategories $projectCat
     *
     * @return SmProjects
     */
    public function setProjectCat(\ScmsBundle\Entity\SmProjCategories $projectCat = null)
    {
        $this->projectCat = $projectCat;

        return $this;
    }

    /**
     * Get projectCat
     *
     * @return \ScmsBundle\Entity\SmProjCategories
     */
    public function getProjectCat()
    {
        return $this->projectCat;
    }

    /**
     * Set projectFeaturedImg
     *
     * @param \ScmsBundle\Entity\SmImages $projectFeaturedImg
     *
     * @return SmProjects
     */
    public function setProjectFeaturedImg(\ScmsBundle\Entity\SmImages $projectFeaturedImg = null)
    {
        $this->projectFeaturedImg = $projectFeaturedImg;

        return $this;
    }

    /**
     * Get projectFeaturedImg
     *
     * @return \ScmsBundle\Entity\SmImages
     */
    public function getProjectFeaturedImg()
    {
        return $this->projectFeaturedImg;
    }

    /**
     * Set projectStatus
     *
     * @param \ScmsBundle\Entity\SmStates $projectStatus
     *
     * @return SmProjects
     */
    public function setProjectStatus(\ScmsBundle\Entity\SmStates $projectStatus = null)
    {
        $this->projectStatus = $projectStatus;

        return $this;
    }

    /**
     * Get projectStatus
     *
     * @return \ScmsBundle\Entity\SmStates
     */
    public function getProjectStatus()
    {
        return $this->projectStatus;
    }
}
