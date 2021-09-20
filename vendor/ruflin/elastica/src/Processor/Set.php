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

namespace Elastica\Processor;

trigger_deprecation('ruflin/elastica', '7.1.0', 'The "%s" class is deprecated, use "%s" instead. It will be removed in 8.0.', Set::class, SetProcessor::class);

/**
 * Elastica Set Processor.
 *
 * @author Federico Panini <fpanini@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/set-processor.html
 * @deprecated since version 7.1.0, use the SetProcessor class instead.
 */
class Set extends SetProcessor
{
}
