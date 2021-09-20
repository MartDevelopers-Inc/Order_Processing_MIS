<?php
/* 
 *  This is the default license template.
 *  
 *  File: ExpectingATEXT.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class ExpectingATEXT extends DetailedReason
{
    public function code() : int
    {
        return 137;
    }

    public function description() : string
    {
        return "Expecting ATEXT (Printable US-ASCII). Extended: " . $this->detailedDescription;
    }
}
