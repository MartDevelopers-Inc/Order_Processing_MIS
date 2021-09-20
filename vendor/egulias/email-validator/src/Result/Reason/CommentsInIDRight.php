<?php
/* 
 *  This is the default license template.
 *  
 *  File: CommentsInIDRight.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class CommentsInIDRight implements Reason
{
    public function code() : int
    {
        return 400;
    }

    public function description() : string
    {
        return 'Comments are not allowed in IDRight for message-id';
    }
}