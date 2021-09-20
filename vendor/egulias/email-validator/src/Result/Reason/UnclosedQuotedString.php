<?php
/* 
 *  This is the default license template.
 *  
 *  File: UnclosedQuotedString.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class UnclosedQuotedString implements Reason
{
    public function code() : int
    {
        return 145;
    }

    public function description() : string
    {
        return "Unclosed quoted string";
    }
}
