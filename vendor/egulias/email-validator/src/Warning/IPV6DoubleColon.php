<?php
/* 
 *  This is the default license template.
 *  
 *  File: IPV6DoubleColon.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class IPV6DoubleColon extends Warning
{
    const CODE = 73;

    public function __construct()
    {
        $this->message = 'Double colon found after IPV6 tag';
        $this->rfcNumber = 5322;
    }
}
