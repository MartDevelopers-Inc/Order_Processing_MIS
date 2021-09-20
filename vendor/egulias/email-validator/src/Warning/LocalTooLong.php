<?php
/* 
 *  This is the default license template.
 *  
 *  File: LocalTooLong.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class LocalTooLong extends Warning
{
    const CODE = 64;
    const LOCAL_PART_LENGTH = 64;

    public function __construct()
    {
        $this->message = 'Local part is too long, exceeds 64 chars (octets)';
        $this->rfcNumber = 5322;
    }
}
