<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmProjCategories
 *
 * @ORM\Table(name="sm_proj_categories", indexes={@ORM\Index(name="proj_cat_img_id", columns={"proj_cat_img_id"})})
 * @ORM\Entity
 */
class SmProjCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="proj_cat_name", type="integer", nullable=false)
     */
    private $projCatName;

    /**
     * @var integer
     *
     * @ORM\Column(name="proj_cat_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projCatId;

    /**
     * @var \ScmsBundle\Entity\SmImages
     *
     * @ORM\ManyToOne(targetEntity="ScmsBundle\Entity\SmImages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proj_cat_img_id", referencedColumnName="img_id")
     * })
     */
    private $projCatImg;



    /**
     * Set projCatName
     *
     * @param integer $projCatName
     *
     * @return SmProjCategories
     */
    public function setProjCatName($projCatName)
    {
        $this->projCatName = $projCatName;

        return $this;
    }

    /**
     * Get projCatName
     *
     * @return integer
     */
    public function getProjCatName()
    {
        return $this->projCatName;
    }

    /**
     * Get projCatId
     *
     * @return integer
     */
    public function getProjCatId()
    {
        return $this->projCatId;
    }

    /**
     * Set projCatImg
     *
     * @param \ScmsBundle\Entity\SmImages $projCatImg
     *
     * @return SmProjCategories
     */
    public function setProjCatImg(\ScmsBundle\Entity\SmImages $projCatImg = null)
    {
        $this->projCatImg = $projCatImg;

        return $this;
    }

    /**
     * Get projCatImg
     *
     * @return \ScmsBundle\Entity\SmImages
     */
    public function getProjCatImg()
    {
        return $this->projCatImg;
    }
}
