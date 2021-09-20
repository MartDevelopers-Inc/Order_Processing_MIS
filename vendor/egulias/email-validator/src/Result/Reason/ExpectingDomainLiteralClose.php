<?php
/* 
 *  This is the default license template.
 *  
 *  File: ExpectingDomainLiteralClose.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class ExpectingDomainLiteralClose implements Reason
{
    public function code() : int
    {
        return 137;
    }

    public function description() : string
    {
        return "Closing bracket ']' for domain literal not found";
    }
}