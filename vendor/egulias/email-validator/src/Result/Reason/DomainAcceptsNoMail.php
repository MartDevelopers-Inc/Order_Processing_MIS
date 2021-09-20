<?php
/* 
 *  This is the default license template.
 *  
 *  File: DomainAcceptsNoMail.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class DomainAcceptsNoMail implements Reason
{
    public function code() : int
    {
        return 154;
    }

    public function description() : string
    {
        return 'Domain accepts no mail (Null MX, RFC7505)';
    }
}