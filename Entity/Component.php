<?php

namespace Awaresoft\Sonata\TimelineBundle\Entity;

use Sonata\TimelineBundle\Entity\Component as BaseComponent;

/**
 * Component entity class
 *
 * @author Bartosz Malec <b.malec@awaresoft.pl>
 */
class Component extends BaseComponent
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
}