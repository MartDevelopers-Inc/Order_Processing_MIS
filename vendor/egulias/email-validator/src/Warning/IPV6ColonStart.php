<?php
/* 
 *  This is the default license template.
 *  
 *  File: IPV6ColonStart.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class IPV6ColonStart extends Warning
{
    const CODE = 76;

    public function __construct()
    {
        $this->message = ':: found at the start of the domain literal';
        $this->rfcNumber = 5322;
    }
}
