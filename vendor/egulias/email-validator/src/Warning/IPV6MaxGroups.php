<?php
/* 
 *  This is the default license template.
 *  
 *  File: IPV6MaxGroups.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class IPV6MaxGroups extends Warning
{
    const CODE = 75;

    public function __construct()
    {
        $this->message = 'Reached the maximum number of IPV6 groups allowed';
        $this->rfcNumber = 5321;
    }
}
