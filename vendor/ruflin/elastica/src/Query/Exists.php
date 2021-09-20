<?php
/* 
 *  This is the default license template.
 *  
 *  File: Exists.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Query;

/**
 * Exists query.
 *
 * @author Oleg Cherniy <oleg.cherniy@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-exists-query.html
 */
class Exists extends AbstractQuery
{
    /**
     * Construct exists query.
     */
    public function __construct(string $field)
    {
        $this->setField($field);
    }

    /**
     * Set field.
     *
     * @return $this
     */
    public function setField(string $field): self
    {
        return $this->setParam('field', $field);
    }
}
