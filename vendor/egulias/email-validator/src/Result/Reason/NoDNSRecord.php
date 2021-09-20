<?php
/* 
 *  This is the default license template.
 *  
 *  File: NoDNSRecord.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class NoDNSRecord implements Reason 
{
    public function code() : int
    {
        return 5;
    }

    public function description() : string
    {
        return 'No MX or A DSN record was found for this email';
    }
}