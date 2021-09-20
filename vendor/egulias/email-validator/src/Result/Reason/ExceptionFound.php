<?php
/* 
 *  This is the default license template.
 *  
 *  File: ExceptionFound.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Egulias\EmailValidator\Result\Reason;

class ExceptionFound implements Reason
{
    /**
     * @var \Exception
     */
    private $exception;

    public function __construct(\Exception $exception)
    {
        $this->exception = $exception;
        
    }
    public function code() : int
    {
        return 999;
    }

    public function description() : string
    {
        return $this->exception->getMessage();
    }
}