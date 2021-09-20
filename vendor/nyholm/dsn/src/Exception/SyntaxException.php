<?php
/* 
 *  This is the default license template.
 *  
 *  File: SyntaxException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

declare(strict_types=1);

namespace Nyholm\Dsn\Exception;

/**
 * Syntax of the DSN string is invalid.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class SyntaxException extends InvalidDsnException
{
}
