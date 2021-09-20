<?php
/* 
 *  This is the default license template.
 *  
 *  File: JoinProcessor.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Processor;

/**
 * Elastica Join Processor.
 *
 * @author Federico Panini <fpanini@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/join-processor.html
 */
class JoinProcessor extends AbstractProcessor
{
    public function __construct(string $field, string $separator)
    {
        $this->setField($field);
        $this->setSeparator($separator);
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
     * Set the separator.
     *
     * @return $this
     */
    public function setSeparator(string $separator): self
    {
        return $this->setParam('separator', $separator);
    }
}
