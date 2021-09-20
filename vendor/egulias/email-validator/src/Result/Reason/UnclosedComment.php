<?php
/* 
 *  This is the default license template.
 *  
 *  File: UnclosedComment.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class UnclosedComment implements Reason 
{
    public function code() : int
    {
        return 146;
    }

    public function description(): string
    {
        return 'No closing comment token found';
    }
}
