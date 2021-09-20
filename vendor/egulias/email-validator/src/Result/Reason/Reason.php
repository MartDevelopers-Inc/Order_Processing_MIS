<?php
/* 
 *  This is the default license template.
 *  
 *  File: Reason.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

interface Reason
{
    /**
     * Code for user land to act upon;
     */
    public function code() : int;

    /**
     * Short description of the result, human readable.
     */
    public function description() : string;
}