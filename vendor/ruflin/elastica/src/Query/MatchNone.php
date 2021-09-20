<?php
/* 
 *  This is the default license template.
 *  
 *  File: MatchNone.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Query;

/**
 * Match none query. Returns no results.
 *
 * @author David Causse
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-match-all-query.html#query-dsl-match-none-query
 */
class MatchNone extends AbstractQuery
{
    /**
     * Creates match none query.
     */
    public function __construct()
    {
        $this->_params = new \stdClass();
    }
}
