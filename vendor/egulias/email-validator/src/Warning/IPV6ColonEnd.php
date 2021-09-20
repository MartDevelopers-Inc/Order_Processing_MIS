<?php
/* 
 *  This is the default license template.
 *  
 *  File: IPV6ColonEnd.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class IPV6ColonEnd extends Warning
{
    const CODE = 77;

    public function __construct()
    {
        $this->message = ':: found at the end of the domain literal';
        $this->rfcNumber = 5322;
    }
}
