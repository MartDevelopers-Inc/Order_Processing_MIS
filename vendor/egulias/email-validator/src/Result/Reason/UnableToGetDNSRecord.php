<?php
/* 
 *  This is the default license template.
 *  
 *  File: UnableToGetDNSRecord.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

/**
 * Used on SERVFAIL, TIMEOUT or other runtime and network errors
 */
class UnableToGetDNSRecord extends NoDNSRecord
{
    public function code() : int
    {
        return 3;
    }

    public function description() : string
    {
        return 'Unable to get DNS records for the host';
    }
}
