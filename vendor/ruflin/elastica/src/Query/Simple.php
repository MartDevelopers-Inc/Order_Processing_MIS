<?php
/* 
 *  This is the default license template.
 *  
 *  File: Simple.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Query;

/**
 * Simple query
 * Pure php array query. Can be used to create any not existing type of query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 */
class Simple extends AbstractQuery
{
    /**
     * Query.
     *
     * @var array Query
     */
    protected $_query = [];

    public function __construct(array $query)
    {
        $this->setQuery($query);
    }

    /**
     * Sets new query array.
     *
     * @param array $query Query array
     *
     * @return $this
     */
    public function setQuery(array $query): self
    {
        $this->_query = $query;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return $this->_query;
    }
}
