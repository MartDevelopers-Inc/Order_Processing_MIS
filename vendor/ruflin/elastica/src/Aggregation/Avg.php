<?php
/* 
 *  This is the default license template.
 *  
 *  File: Avg.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Aggregation;

/**
 * Class Avg.
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-avg-aggregation.html
 */
class Avg extends AbstractSimpleAggregation
{
    use Traits\MissingTrait;
}
