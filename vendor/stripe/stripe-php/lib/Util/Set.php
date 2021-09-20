<?php
/* 
 *  This is the default license template.
 *  
 *  File: Set.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Stripe\Util;

use ArrayIterator;
use IteratorAggregate;

class Set implements IteratorAggregate
{
    private $_elts;

    public function __construct($members = [])
    {
        $this->_elts = [];
        foreach ($members as $item) {
            $this->_elts[$item] = true;
        }
    }

    public function includes($elt)
    {
        return isset($this->_elts[$elt]);
    }

    public function add($elt)
    {
        $this->_elts[$elt] = true;
    }

    public function discard($elt)
    {
        unset($this->_elts[$elt]);
    }

    public function toArray()
    {
        return \array_keys($this->_elts);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->toArray());
    }
}
