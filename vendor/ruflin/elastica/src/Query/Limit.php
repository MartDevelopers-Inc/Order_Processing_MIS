<?php
/* 
 *  This is the default license template.
 *  
 *  File: Limit.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Query;

/**
 * Limit Query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-limit-query.html
 */
class Limit extends AbstractQuery
{
    /**
     * Construct limit query.
     *
     * @param int $limit Limit
     */
    public function __construct(int $limit)
    {
        $this->setLimit($limit);
    }

    /**
     * Set the limit.
     *
     * @param int $limit Limit
     *
     * @return $this
     */
    public function setLimit(int $limit): self
    {
        return $this->setParam('value', $limit);
    }
}
