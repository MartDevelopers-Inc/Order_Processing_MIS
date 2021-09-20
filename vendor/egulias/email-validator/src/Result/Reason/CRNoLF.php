<?php
/* 
 *  This is the default license template.
 *  
 *  File: CRNoLF.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class CRNoLF implements Reason
{
    public function code() : int
    {
        return 150;
    }

    public function description() : string
    {
        return 'Missing LF after CR';
    }
}
