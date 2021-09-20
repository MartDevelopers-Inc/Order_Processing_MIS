<?php
/* 
 *  This is the default license template.
 *  
 *  File: ShardSizeTrait.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Aggregation\Traits;

trait ShardSizeTrait
{
    /**
     * @return $this
     */
    public function setShardSize(int $size): self
    {
        return $this->setParam('shard_size', $size);
    }
}
