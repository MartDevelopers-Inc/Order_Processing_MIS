<?php
/* 
 *  This is the default license template.
 *  
 *  File: DeprecatedComment.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class DeprecatedComment extends Warning
{
    const CODE = 37;

    public function __construct()
    {
        $this->message = 'Deprecated comments';
    }
}
