<?php
/* 
 *  This is the default license template.
 *  
 *  File: NoCodeCoverageDriverAvailableException.php
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
namespace SebastianBergmann\CodeCoverage;

use RuntimeException;

final class NoCodeCoverageDriverAvailableException extends RuntimeException implements Exception
{
    public function __construct()
    {
        parent::__construct('No code coverage driver available');
    }
}
