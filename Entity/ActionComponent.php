<?php

namespace Awaresoft\Sonata\TimelineBundle\Entity;

use Sonata\TimelineBundle\Entity\ActionComponent as BaseActionComponent;

/**
 * ActionComponent entity class
 *
 * @author Bartosz Malec <b.malec@awaresoft.pl>
 */
class ActionComponent extends BaseActionComponent
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