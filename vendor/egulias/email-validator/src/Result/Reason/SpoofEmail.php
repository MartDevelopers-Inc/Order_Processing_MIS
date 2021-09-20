<?php
/* 
 *  This is the default license template.
 *  
 *  File: SpoofEmail.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class SpoofEmail implements Reason
{
    public function code() : int
    {
        return 298;
    }

    public function description() : string
    {
        return 'The email contains mixed UTF8 chars that makes it suspicious'; 
    }

}
