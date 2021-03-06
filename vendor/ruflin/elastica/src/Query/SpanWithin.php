<?php
/* 
 *  This is the default license template.
 *  
 *  File: SpanWithin.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Query;

/**
 * SpanWithin query.
 *
 * @author Alessandro Chitolina <alekitto@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-span-within-query.html
 */
class SpanWithin extends AbstractSpanQuery
{
    public function __construct(?AbstractSpanQuery $little = null, ?AbstractSpanQuery $big = null)
    {
        if (null !== $little) {
            $this->setLittle($little);
        }

        if (null !== $big) {
            $this->setBig($big);
        }
    }

    /**
     * @return $this
     */
    public function setLittle(AbstractSpanQuery $little): self
    {
        return $this->setParam('little', $little);
    }

    /**
     * @return $this
     */
    public function setBig(AbstractSpanQuery $big): self
    {
        return $this->setParam('big', $big);
    }
}
