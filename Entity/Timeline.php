<?php

namespace Awaresoft\Sonata\TimelineBundle\Entity;

use Sonata\TimelineBundle\Entity\Timeline as BaseTimeline;

/**
 * Timeline entity class
 *
 * @author Bartosz Malec <b.malec@awaresoft.pl>
 */
class Timeline extends BaseTimeline
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