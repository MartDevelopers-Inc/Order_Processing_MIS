<?php
/* 
 *  This is the default license template.
 *  
 *  File: CreateDocument.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Bulk\Action;

class CreateDocument extends IndexDocument
{
    /**
     * @var string
     */
    protected $_opType = self::OP_TYPE_CREATE;
}
