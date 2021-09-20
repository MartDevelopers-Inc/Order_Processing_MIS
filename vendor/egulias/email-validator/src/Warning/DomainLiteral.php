<?php
/* 
 *  This is the default license template.
 *  
 *  File: DomainLiteral.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class DomainLiteral extends Warning
{
    const CODE = 70;

    public function __construct()
    {
        $this->message = 'Domain Literal';
        $this->rfcNumber = 5322;
    }
}
