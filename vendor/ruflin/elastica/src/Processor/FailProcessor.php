<?php
/* 
 *  This is the default license template.
 *  
 *  File: FailProcessor.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Processor;

/**
 * Elastica Fail Processor.
 *
 * @author Federico Panini <fpanini@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/fail-processor.html
 */
class FailProcessor extends AbstractProcessor
{
    public function __construct(string $message)
    {
        $this->setMessage($message);
    }

    /**
     * Set Fail message.
     *
     * @return $this
     */
    public function setMessage(string $message): self
    {
        return $this->setParam('message', $message);
    }
}
