<?php
/* 
 *  This is the default license template.
 *  
 *  File: DomainHyphened.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class DomainHyphened extends DetailedReason
{
    public function code() : int
    {
        return 144;
    }

    public function description() : string
    {
        return 'S_HYPHEN found in domain';
    }
}
