<?php
/* 
 *  This is the default license template.
 *  
 *  File: SpanNot.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Query;

/**
 * SpanNot query.
 *
 * @author Alessandro Chitolina <alekitto@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-span-not-query.html
 */
class SpanNot extends AbstractSpanQuery
{
    /**
     * @param AbstractSpanQuery $include
     * @param AbstractSpanQuery $exclude
     */
    public function __construct(?AbstractSpanQuery $include = null, ?AbstractSpanQuery $exclude = null)
    {
        if (null !== $include) {
            $this->setInclude($include);
        }

        if (null !== $exclude) {
            $this->setExclude($exclude);
        }
    }

    /**
     * @return $this
     */
    public function setInclude(AbstractSpanQuery $include): self
    {
        return $this->setParam('include', $include);
    }

    /**
     * @return $this
     */
    public function setExclude(AbstractSpanQuery $exclude): self
    {
        return $this->setParam('exclude', $exclude);
    }
}
