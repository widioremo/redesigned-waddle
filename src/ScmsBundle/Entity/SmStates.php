<?php

namespace ScmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmStates
 *
 * @ORM\Table(name="sm_states")
 * @ORM\Entity
 */
class SmStates
{
    /**
     * @var string
     *
     * @ORM\Column(name="state_name", type="string", length=20, nullable=false)
     */
    private $stateName;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stateId;



    /**
     * Set stateName
     *
     * @param string $stateName
     *
     * @return SmStates
     */
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;

        return $this;
    }

    /**
     * Get stateName
     *
     * @return string
     */
    public function getStateName()
    {
        return $this->stateName;
    }

    /**
     * Get stateId
     *
     * @return integer
     */
    public function getStateId()
    {
        return $this->stateId;
    }
}
