<?php
/* 
 *  This is the default license template.
 *  
 *  File: CommaInDomain.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class CommaInDomain implements Reason
{
    public function code() : int
    {
        return 200;
    }

    public function description() : string
    {
        return "Comma ',' is not allowed in domain part";
    }
}