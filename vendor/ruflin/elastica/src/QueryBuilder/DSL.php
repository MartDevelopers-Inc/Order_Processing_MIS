<?php
/* 
 *  This is the default license template.
 *  
 *  File: DSL.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\QueryBuilder;

/**
 * DSL Interface.
 *
 * @author Manuel Andreo Garcia <andreo.garcia@googlemail.com>
 */
interface DSL
{
    public const TYPE_QUERY = 'query';
    public const TYPE_AGGREGATION = 'aggregation';
    public const TYPE_SUGGEST = 'suggest';
    public const TYPE_COLLAPSE = 'collapse';

    /**
     * must return type for QueryBuilder usage.
     */
    public function getType(): string;
}
