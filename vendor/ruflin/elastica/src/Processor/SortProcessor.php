<?php
/* 
 *  This is the default license template.
 *  
 *  File: SortProcessor.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Processor;

/**
 * Elastica Sort Processor.
 *
 * @author Federico Panini <fpanini@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/sort-processor.html
 */
class SortProcessor extends AbstractProcessor
{
    public const DEFAULT_ORDER_VALUE = 'asc';

    public function __construct(string $field)
    {
        $this->setField($field);
    }

    /**
     * Set the field.
     *
     * @return $this
     */
    public function setField(string $field): self
    {
        return $this->setParam('field', $field);
    }

    /**
     * Set order. Default 'asc'.
     *
     * @return $this
     */
    public function setOrder(string $order): self
    {
        return $this->setParam('order', $order);
    }
}
