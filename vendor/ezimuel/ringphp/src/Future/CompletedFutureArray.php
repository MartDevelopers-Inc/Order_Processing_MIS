<?php
/* 
 *  This is the default license template.
 *  
 *  File: CompletedFutureArray.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace GuzzleHttp\Ring\Future;

/**
 * Represents a future array that has been completed successfully.
 */
class CompletedFutureArray extends CompletedFutureValue implements FutureArrayInterface
{
    public function __construct(array $result)
    {
        parent::__construct($result);
    }

    public function offsetExists($offset)
    {
        return isset($this->result[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->result[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->result[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->result[$offset]);
    }

    public function count()
    {
        return count($this->result);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->result);
    }
}
