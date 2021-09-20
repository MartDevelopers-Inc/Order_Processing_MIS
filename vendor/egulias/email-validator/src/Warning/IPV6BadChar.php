<?php
/* 
 *  This is the default license template.
 *  
 *  File: IPV6BadChar.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class IPV6BadChar extends Warning
{
    const CODE = 74;

    public function __construct()
    {
        $this->message = 'Bad char in IPV6 domain literal';
        $this->rfcNumber = 5322;
    }
}
