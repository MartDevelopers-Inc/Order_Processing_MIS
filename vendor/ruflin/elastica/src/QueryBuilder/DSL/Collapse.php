<?php
/* 
 *  This is the default license template.
 *  
 *  File: Collapse.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\QueryBuilder\DSL;

use Elastica\Collapse\InnerHits;
use Elastica\QueryBuilder\DSL;

/**
 * Class Collapse.
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/search-request-collapse.html
 */
class Collapse implements DSL
{
    public function getType(): string
    {
        return self::TYPE_COLLAPSE;
    }

    public function inner_hits(): InnerHits
    {
        return new InnerHits();
    }
}
