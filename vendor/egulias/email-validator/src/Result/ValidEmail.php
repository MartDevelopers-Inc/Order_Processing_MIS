<?php
/* 
 *  This is the default license template.
 *  
 *  File: ValidEmail.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result;

class ValidEmail implements Result
{
    public function isValid(): bool
    {
        return true;
    }

    public function isInvalid(): bool
    {
        return false;
    }

    public function description(): string
    {
        return "Valid email";
    }

    public function code(): int
    {
        return 0;
    }

}