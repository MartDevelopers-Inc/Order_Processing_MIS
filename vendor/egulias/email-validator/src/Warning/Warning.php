<?php
/* 
 *  This is the default license template.
 *  
 *  File: Warning.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Warning;

abstract class Warning
{
    const CODE = 0;

    /**
     * @var string
     */
    protected $message = '';

    /**
     * @var int
     */
    protected $rfcNumber = 0;

    /**
     * @return string
     */
    public function message()
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function code()
    {
        return self::CODE;
    }

    /**
     * @return int
     */
    public function RFCNumber()
    {
        return $this->rfcNumber;
    }

    public function __toString()
    {
        return $this->message() . " rfc: " .  $this->rfcNumber . "interal code: " . static::CODE;
    }
}
