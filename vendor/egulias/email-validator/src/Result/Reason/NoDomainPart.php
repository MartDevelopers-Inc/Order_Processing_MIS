<?php
/* 
 *  This is the default license template.
 *  
 *  File: NoDomainPart.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class NoDomainPart implements Reason
{
    public function code() : int
    {
        return 131;
    }

    public function description() : string
    {
        return 'No domain part found';
    }
}
