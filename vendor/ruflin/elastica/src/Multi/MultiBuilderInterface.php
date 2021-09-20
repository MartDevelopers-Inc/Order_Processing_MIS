<?php
/* 
 *  This is the default license template.
 *  
 *  File: MultiBuilderInterface.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Multi;

use Elastica\Response;
use Elastica\Search as BaseSearch;

interface MultiBuilderInterface
{
    /**
     * @param BaseSearch[] $searches
     */
    public function buildMultiResultSet(Response $response, array $searches): ResultSet;
}
