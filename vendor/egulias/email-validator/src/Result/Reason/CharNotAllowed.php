<?php
/* 
 *  This is the default license template.
 *  
 *  File: CharNotAllowed.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class CharNotAllowed implements Reason
{
    public function code() : int
    {
        return 1;
    }

    public function description() : string
    {
        return "Character not allowed";
    }
}