<?php
/* 
 *  This is the default license template.
 *  
 *  File: CRLFX2.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class CRLFX2 implements Reason
{
    public function code() : int
    {
        return 148;
    }

    public function description() : string
    {
        return 'CR  LF tokens found twice';
    }
}
