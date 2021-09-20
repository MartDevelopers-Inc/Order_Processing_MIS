<?php
/* 
 *  This is the default license template.
 *  
 *  File: UnOpenedComment.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class UnOpenedComment implements Reason
{
    public function code() : int
    {
        return 152;
    }

    public function description(): string
    {
        return 'Missing openning comment parentheses - https://tools.ietf.org/html/rfc5322#section-3.2.2';
    }
}