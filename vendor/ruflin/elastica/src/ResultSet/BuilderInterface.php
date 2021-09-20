<?php
/* 
 *  This is the default license template.
 *  
 *  File: BuilderInterface.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\ResultSet;

use Elastica\Query;
use Elastica\Response;
use Elastica\ResultSet;

interface BuilderInterface
{
    /**
     * Builds a ResultSet given a specific response and query.
     */
    public function buildResultSet(Response $response, Query $query): ResultSet;
}
