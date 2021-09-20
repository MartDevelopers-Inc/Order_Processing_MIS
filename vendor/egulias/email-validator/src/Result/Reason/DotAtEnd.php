<?php
/* 
 *  This is the default license template.
 *  
 *  File: DotAtEnd.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class DotAtEnd implements Reason
{
    public function code() : int
    {
        return 142;
    }

    public function description() : string
    {
        return 'Dot at the end';
    }
}
