<?php
/* 
 *  This is the default license template.
 *  
 *  File: JsonProcessor.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Processor;

/**
 * Elastica Json Processor.
 *
 * @author Federico Panini <fpanini@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/json-processor.html
 */
class JsonProcessor extends AbstractProcessor
{
    public const DEFAULT_TARGET_FIELD_VALUE = 'field';
    public const DEFAULT_ADD_TO_ROOT_VALUE = false;

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
     * Set target_field. Default field.
     *
     * @return $this
     */
    public function setTargetField(string $targetField): self
    {
        return $this->setParam('target_field', $targetField);
    }

    /**
     * Set add_to_root. Default value false.
     *
     * @return $this
     */
    public function setAddToRoot(bool $addToRoot): self
    {
        return $this->setParam('add_to_root', $addToRoot);
    }
}
