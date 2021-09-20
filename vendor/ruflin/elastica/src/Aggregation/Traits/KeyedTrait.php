<?php
/* 
 *  This is the default license template.
 *  
 *  File: KeyedTrait.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Aggregation\Traits;

trait KeyedTrait
{
    /**
     * Setting the keyed flag to true associates a unique string key
     * with each bucket and returns the result as a hash rather than an array.
     *
     * @return $this
     */
    public function setKeyed(bool $keyed = true): self
    {
        return $this->setParam('keyed', $keyed);
    }
}
