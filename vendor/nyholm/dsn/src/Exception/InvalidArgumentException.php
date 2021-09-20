<?php
/* 
 *  This is the default license template.
 *  
 *  File: InvalidArgumentException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

declare(strict_types=1);

namespace Nyholm\Dsn\Exception;

/**
 * Base InvalidArgumentException.
 */
class InvalidArgumentException extends \InvalidArgumentException implements ExceptionInterface
{
}
