<?php
/* 
 *  This is the default license template.
 *  
 *  File: RoundRobin.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Connection\Strategy;

use Elastica\Connection;

/**
 * Description of RoundRobin.
 *
 * @author chabior
 */
class RoundRobin extends Simple
{
    /**
     * {@inheritdoc}
     */
    public function getConnection(array $connections): Connection
    {
        \shuffle($connections);

        return parent::getConnection($connections);
    }
}
