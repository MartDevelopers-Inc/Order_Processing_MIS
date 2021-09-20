<?php
/* 
 *  This is the default license template.
 *  
 *  File: AbstractQuery.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Query;

use Elastica\Param;
use Elastica\Util;

/**
 * Abstract query object. Should be extended by all query types.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 */
abstract class AbstractQuery extends Param
{
    protected function _getBaseName()
    {
        $shortName = (new \ReflectionClass($this))->getShortName();
        $shortName = \preg_replace('/Query$/', '', $shortName);

        return Util::toSnakeCase($shortName);
    }
}
