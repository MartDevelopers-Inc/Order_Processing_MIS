<?php
/* 
 *  This is the default license template.
 *  
 *  File: DotAtStart.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class DotAtStart implements Reason
{
    public function code() : int
    {
        return 141;
    }

    public function description() : string
    {
        return "Starts with a DOT";
    }
}
