<?php
/* 
 *  This is the default license template.
 *  
 *  File: ExpectingCTEXT.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class ExpectingCTEXT implements Reason
{
    public function code() : int
    {
        return 139;
    }

    public function description() : string
    {
        return 'Expecting CTEXT';
    }
}
