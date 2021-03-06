<?php
/* 
 *  This is the default license template.
 *  
 *  File: CallbackStrategy.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Connection\Strategy;

use Elastica\Connection;

/**
 * Description of CallbackStrategy.
 *
 * @author chabior
 */
class CallbackStrategy implements StrategyInterface
{
    /**
     * @var callable
     */
    protected $_callback;

    public function __construct(callable $callback)
    {
        $this->_callback = $callback;
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection(array $connections): Connection
    {
        return ($this->_callback)($connections);
    }
}
