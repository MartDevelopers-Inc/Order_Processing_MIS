<?php
/* 
 *  This is the default license template.
 *  
 *  File: TLD.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class TLD extends Warning
{
    const CODE = 9;

    public function __construct()
    {
        $this->message = "RFC5321, TLD";
    }
}
