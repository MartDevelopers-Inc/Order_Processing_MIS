<?php
/* 
 *  This is the default license template.
 *  
 *  File: UnhandledRejectionException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace React\Promise;

class UnhandledRejectionException extends \RuntimeException
{
    private $reason;

    public static function resolve($reason)
    {
        if ($reason instanceof \Exception || $reason instanceof \Throwable) {
            return $reason;
        }

        return new static($reason);
    }

    public function __construct($reason)
    {
        $this->reason = $reason;

        $message = \sprintf('Unhandled Rejection: %s', \json_encode($reason));

        parent::__construct($message, 0);
    }

    public function getReason()
    {
        return $this->reason;
    }
}
