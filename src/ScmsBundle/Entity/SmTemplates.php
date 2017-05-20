<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmTemplates
 *
 * @ORM\Table(name="sm_templates")
 * @ORM\Entity
 */
class SmTemplates
{
    /**
     * @var string
     *
     * @ORM\Column(name="template_name", type="string", length=20, nullable=false)
     */
    private $templateName;

    /**
     * @var integer
     *
     * @ORM\Column(name="template_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $templateId;



    /**
     * Set templateName
     *
     * @param string $templateName
     *
     * @return SmTemplates
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;

        return $this;
    }

    /**
     * Get templateName
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Get templateId
     *
     * @return integer
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }
}
