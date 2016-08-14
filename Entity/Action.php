<?php

namespace Awaresoft\Sonata\TimelineBundle\Entity;

use Sonata\TimelineBundle\Entity\Action as BaseAction;

/**
 * Action entity class
 *
 * @author Bartosz Malec <b.malec@awaresoft.pl>
 */
class Action extends BaseAction
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