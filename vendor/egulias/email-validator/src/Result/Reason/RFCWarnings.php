<?php
/* 
 *  This is the default license template.
 *  
 *  File: RFCWarnings.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class RFCWarnings implements Reason
{
    public function code() : int
    {
        return 997;
    }

    public function description() : string
    {
        return 'Warnings found after validating';
    }
}
