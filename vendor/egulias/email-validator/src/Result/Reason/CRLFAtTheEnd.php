<?php
/* 
 *  This is the default license template.
 *  
 *  File: CRLFAtTheEnd.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class CRLFAtTheEnd implements Reason
{
    const CODE = 149;
    const REASON = "CRLF at the end";

    public function code() : int
    {
        return 149;
    }

    public function description() : string
    {
        return 'CRLF at the end';
    }
}
