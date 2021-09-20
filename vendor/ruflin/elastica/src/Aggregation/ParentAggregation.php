<?php
/* 
 *  This is the default license template.
 *  
 *  File: ParentAggregation.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Aggregation;

/**
 * Class ParentAggregation.
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-parent-aggregation.html
 */
class ParentAggregation extends AbstractAggregation
{
    /**
     * Set the child type for this aggregation.
     *
     * @param string $type the child type that should be selected
     *
     * @return $this
     */
    public function setType($type): self
    {
        return $this->setParam('type', $type);
    }
}
