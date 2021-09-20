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

namespace Elastica;

use Elastica\Collapse\InnerHits;

/**
 * Implementation of field collapse.
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/search-request-body.html#request-body-search-collapse
 */
class Collapse extends Param
{
    /**
     * Set field to collapse.
     */
    public function setFieldname(string $fieldName): self
    {
        return $this->setParam('field', $fieldName);
    }

    /**
     * Set inner hits for collapsed field.
     */
    public function setInnerHits(InnerHits $innerHits): self
    {
        return $this->setParam('inner_hits', $innerHits);
    }

    public function addInnerHits(InnerHits $innerHits): self
    {
        $hits = [];

        if ($this->hasParam('inner_hits')) {
            $existingInnerHits = $this->getParam('inner_hits');

            $hits = $existingInnerHits instanceof InnerHits ? [$existingInnerHits] : $existingInnerHits;
        }

        $hits[] = $innerHits;

        return $this->setParam('inner_hits', $hits);
    }

    public function setMaxConcurrentGroupSearches(int $groupSearches): self
    {
        return $this->setParam('max_concurrent_group_searches', $groupSearches);
    }

    public function toArray(): array
    {
        $data = $this->getParams();

        if (!empty($this->_rawParams)) {
            $data = \array_merge($data, $this->_rawParams);
        }

        return $this->_convertArrayable($data);
    }
}
