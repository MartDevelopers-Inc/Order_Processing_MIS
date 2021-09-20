<?php
/* 
 *  This is the default license template.
 *  
 *  File: ObsoleteDTEXT.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class ObsoleteDTEXT extends Warning
{
    const CODE = 71;

    public function __construct()
    {
        $this->rfcNumber = 5322;
        $this->message = 'Obsolete DTEXT in domain literal';
    }
}
