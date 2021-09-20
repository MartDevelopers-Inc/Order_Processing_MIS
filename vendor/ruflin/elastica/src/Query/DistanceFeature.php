<?php
/* 
 *  This is the default license template.
 *  
 *  File: DistanceFeature.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Query;

/**
 * Distance feature query.
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-distance-feature-query.html
 */
class DistanceFeature extends AbstractQuery
{
    public function __construct(string $field, $origin, string $pivot)
    {
        $this->setField($field);
        $this->setOrigin($origin);
        $this->setPivot($pivot);
    }

    public function setField(string $field): self
    {
        return $this->setParam('field', $field);
    }

    /**
     * @param array|string $origin
     */
    public function setOrigin($origin): self
    {
        return $this->setParam('origin', $origin);
    }

    public function setPivot(string $pivot): self
    {
        return $this->setParam('pivot', $pivot);
    }

    public function setBoost(float $boost = 1.0): self
    {
        return $this->setParam('boost', $boost);
    }
}
