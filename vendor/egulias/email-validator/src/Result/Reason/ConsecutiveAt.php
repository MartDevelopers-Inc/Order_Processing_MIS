<?php
/* 
 *  This is the default license template.
 *  
 *  File: ConsecutiveAt.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class ConsecutiveAt implements Reason
{
    public function code() : int
    {
        return 128;
    }

    public function description() : string
    {
        return '@ found after another @';
    }

}
