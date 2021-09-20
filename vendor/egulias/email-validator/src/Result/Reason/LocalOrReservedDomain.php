<?php
/* 
 *  This is the default license template.
 *  
 *  File: LocalOrReservedDomain.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class LocalOrReservedDomain implements Reason
{
    public function code() : int
    {
        return 153;
    }

    public function description() : string
    {
        return 'Local, mDNS or reserved domain (RFC2606, RFC6762)';
    }
}