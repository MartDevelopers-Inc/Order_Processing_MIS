<?php
/* 
 *  This is the default license template.
 *  
 *  File: ConstantScore.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Query;

/**
 * Constant score query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-constant-score-query.html
 */
class ConstantScore extends AbstractQuery
{
    /**
     * Construct constant score query.
     */
    public function __construct(?AbstractQuery $filter = null)
    {
        if (null !== $filter) {
            $this->setFilter($filter);
        }
    }

    /**
     * Set filter.
     *
     * @return $this
     */
    public function setFilter(AbstractQuery $filter): self
    {
        return $this->setParam('filter', $filter);
    }

    /**
     * Set boost.
     *
     * @return $this
     */
    public function setBoost(float $boost): self
    {
        return $this->setParam('boost', $boost);
    }
}
