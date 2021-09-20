<?php
/* 
 *  This is the default license template.
 *  
 *  File: ProcessorInterface.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\ResultSet;

use Elastica\ResultSet;

interface ProcessorInterface
{
    /**
     * Iterates over a ResultSet allowing a processor to iterate over any
     * Results as required.
     */
    public function process(ResultSet $resultSet);
}
