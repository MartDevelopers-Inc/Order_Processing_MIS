<?php
/* 
 *  This is the default license template.
 *  
 *  File: LabelTooLong.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class LabelTooLong implements Reason
{
    public function code() : int
    {
        return 245;
    }

    public function description() : string
    {
        return 'Domain "label" is longer than 63 characters';
    }
}
