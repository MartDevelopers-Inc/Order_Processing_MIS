<?php
/* 
 *  This is the default license template.
 *  
 *  File: FunctionsNotAllowedException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

declare(strict_types=1);

namespace Nyholm\Dsn\Exception;

/**
 * Thrown when you cannot use functions in a DSN.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class FunctionsNotAllowedException extends InvalidDsnException
{
    public function __construct(string $dsn)
    {
        parent::__construct($dsn, 'Function are not allowed in this DSN');
    }
}
