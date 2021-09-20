<?php
/* 
 *  This is the default license template.
 *  
 *  File: EmptyValidationList.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Validation\Exception;

use Exception;

class EmptyValidationList extends \InvalidArgumentException
{
    /**
    * @param int $code
    */
    public function __construct($code = 0, Exception $previous = null)
    {
        parent::__construct("Empty validation list is not allowed", $code, $previous);
    }
}
