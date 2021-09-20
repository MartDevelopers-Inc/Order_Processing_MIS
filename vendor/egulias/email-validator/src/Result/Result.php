<?php
/* 
 *  This is the default license template.
 *  
 *  File: Result.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result;

interface Result
{
    /**
     * Is validation result valid?
     */
    public function isValid() : bool;

    /**
     * Is validation result invalid?
     * Usually the inverse of isValid()
     */
    public function isInvalid() : bool;

    /**
     * Short description of the result, human readable.
     */
    public function description() : string;

    /**
     * Code for user land to act upon.
     */
    public function code() : int;
}