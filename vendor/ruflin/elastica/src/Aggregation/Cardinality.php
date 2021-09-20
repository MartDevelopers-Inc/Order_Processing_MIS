<?php
/* 
 *  This is the default license template.
 *  
 *  File: Cardinality.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Aggregation;

/**
 * Class Cardinality.
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-cardinality-aggregation.html
 */
class Cardinality extends AbstractSimpleAggregation
{
    use Traits\MissingTrait;

    public const DEFAULT_PRECISION_THRESHOLD_VALUE = 3000;

    /**
     * @return $this
     */
    public function setPrecisionThreshold(int $precisionThreshold): self
    {
        return $this->setParam('precision_threshold', $precisionThreshold);
    }

    /**
     * @return $this
     */
    public function setRehash(bool $rehash): self
    {
        return $this->setParam('rehash', $rehash);
    }
}
