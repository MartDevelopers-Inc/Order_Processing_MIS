<?php
/* 
 *  This is the default license template.
 *  
 *  File: FunctionNotSupportedException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

declare(strict_types=1);

namespace Nyholm\Dsn\Exception;

/**
 * Thrown when the provided function is not supported.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class FunctionNotSupportedException extends InvalidDsnException
{
    /**
     * @var string
     */
    private $function;

    public function __construct(string $dsn, string $function, ?string $message = null)
    {
        parent::__construct($dsn, $message ?? sprintf('Function "%s" is not supported', $function));
        $this->function = $function;
    }

    public function getFunction(): string
    {
        return $this->function;
    }
}
