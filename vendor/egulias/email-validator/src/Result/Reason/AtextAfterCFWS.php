<?php
/* 
 *  This is the default license template.
 *  
 *  File: AtextAfterCFWS.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class AtextAfterCFWS implements Reason
{
    public function code() : int
    {
        return 133;
    }

    public function description() : string
    {
        return 'ATEXT found after CFWS';
    }
}