<?php
/* 
 *  This is the default license template.
 *  
 *  File: MissingTrait.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Aggregation\Traits;

trait MissingTrait
{
    /**
     * Defines how documents that are missing a value should be treated.
     *
     * @param mixed $missing
     *
     * @return $this
     */
    public function setMissing($missing): self
    {
        return $this->setParam('missing', $missing);
    }
}
