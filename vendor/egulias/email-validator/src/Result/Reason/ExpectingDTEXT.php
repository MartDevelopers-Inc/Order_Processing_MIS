<?php
/* 
 *  This is the default license template.
 *  
 *  File: ExpectingDTEXT.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class ExpectingDTEXT implements Reason
{
    public function code() : int
    {
        return 129;
    }

    public function description() : string
    {
        return 'Expecting DTEXT';
    }
}
