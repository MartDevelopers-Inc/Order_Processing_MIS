<?php
/* 
 *  This is the default license template.
 *  
 *  File: WrongXdebugVersionException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Driver;

use RuntimeException;
use SebastianBergmann\CodeCoverage\Exception;

final class WrongXdebugVersionException extends RuntimeException implements Exception
{
}
