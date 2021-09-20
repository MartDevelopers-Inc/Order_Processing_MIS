<?php
/* 
 *  This is the default license template.
 *  
 *  File: Sampler.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Aggregation;

/**
 * Class Sampler.
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-sampler-aggregation.html
 */
class Sampler extends AbstractAggregation
{
    use Traits\ShardSizeTrait;
}
