<?php
/* 
 *  This is the default license template.
 *  
 *  File: RemoveProcessor.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Processor;

/**
 * Elastica Remove Processor.
 *
 * @author Federico Panini <fpanini@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/remove-processor.html
 */
class RemoveProcessor extends AbstractProcessor
{
    /**
     * @param array|string $field
     */
    public function __construct($field)
    {
        $this->setField($field);
    }

    /**
     * Set field.
     *
     * @param array|string $field
     *
     * @return $this
     */
    public function setField($field): self
    {
        return $this->setParam('field', $field);
    }
}
