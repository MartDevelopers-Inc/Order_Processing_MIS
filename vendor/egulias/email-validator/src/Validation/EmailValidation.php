<?php
/* 
 *  This is the default license template.
 *  
 *  File: EmailValidation.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Validation;

use Egulias\EmailValidator\EmailLexer;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Warning\Warning;

interface EmailValidation
{
    /**
     * Returns true if the given email is valid.
     *
     * @param string     $email      The email you want to validate.
     * @param EmailLexer $emailLexer The email lexer.
     *
     * @return bool
     */
    public function isValid(string $email, EmailLexer $emailLexer) : bool;

    /**
     * Returns the validation error.
     *
     * @return InvalidEmail|null
     */
    public function getError() : ?InvalidEmail;

    /**
     * Returns the validation warnings.
     *
     * @return Warning[]
     */
    public function getWarnings() : array;
}
