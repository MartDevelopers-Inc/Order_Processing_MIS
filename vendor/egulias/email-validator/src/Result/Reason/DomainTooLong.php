<?php
/* 
 *  This is the default license template.
 *  
 *  File: DomainTooLong.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class DomainTooLong implements Reason
{
    public function code() : int
    {
        return 244;
    }

    public function description() : string
    {
        return 'Domain is longer than 253 characters';
    }
}
