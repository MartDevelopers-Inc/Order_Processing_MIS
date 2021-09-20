<?php
/* 
 *  This is the default license template.
 *  
 *  File: QuotedString.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

class QuotedString extends Warning
{
    const CODE = 11;

    /**
     * @param scalar $prevToken
     * @param scalar $postToken
     */
    public function __construct($prevToken, $postToken)
    {
        $this->message = "Quoted String found between $prevToken and $postToken";
    }
}
