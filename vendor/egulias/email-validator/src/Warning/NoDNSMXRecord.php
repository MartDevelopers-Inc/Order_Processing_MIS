<?php
/* 
 *  This is the default license template.
 *  
 *  File: NoDNSMXRecord.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class NoDNSMXRecord extends Warning
{
    const CODE = 6;

    public function __construct()
    {
        $this->message = 'No MX DSN record was found for this email';
        $this->rfcNumber = 5321;
    }
}
