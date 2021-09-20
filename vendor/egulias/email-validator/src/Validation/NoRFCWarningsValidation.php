<?php
/* 
 *  This is the default license template.
 *  
 *  File: NoRFCWarningsValidation.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Validation;

use Egulias\EmailValidator\EmailLexer;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Result\Reason\RFCWarnings;

class NoRFCWarningsValidation extends RFCValidation
{
    /**
     * @var InvalidEmail|null
     */
    private $error;

    /**
     * {@inheritdoc}
     */
    public function isValid(string $email, EmailLexer $emailLexer) : bool
    {
        if (!parent::isValid($email, $emailLexer)) {
            return false;
        }

        if (empty($this->getWarnings())) {
            return true;
        }

        $this->error = new InvalidEmail(new RFCWarnings(), '');

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getError() : ?InvalidEmail
    {
        return $this->error ?: parent::getError();
    }
}
