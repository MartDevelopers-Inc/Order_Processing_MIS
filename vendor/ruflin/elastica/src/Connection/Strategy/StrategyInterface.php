<?php
/* 
 *  This is the default license template.
 *  
 *  File: StrategyInterface.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Connection\Strategy;

use Elastica\Connection;

/**
 * Description of AbstractStrategy.
 *
 * @author chabior
 */
interface StrategyInterface
{
    /**
     * @param Connection[] $connections
     */
    public function getConnection(array $connections): Connection;
}
