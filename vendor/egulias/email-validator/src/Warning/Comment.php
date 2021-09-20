<?php
/* 
 *  This is the default license template.
 *  
 *  File: Comment.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class Comment extends Warning
{
    const CODE = 17;

    public function __construct()
    {
        $this->message = "Comments found in this email";
    }
}
