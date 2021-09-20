<?php
/* 
 *  This is the default license template.
 *  
 *  File: CoveredFileAnalyser.php
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
namespace SebastianBergmann\CodeCoverage\StaticAnalysis;

use SebastianBergmann\LinesOfCode\LinesOfCode;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-code-coverage
 */
interface CoveredFileAnalyser
{
    public function classesIn(string $filename): array;

    public function traitsIn(string $filename): array;

    public function functionsIn(string $filename): array;

    public function linesOfCodeFor(string $filename): LinesOfCode;

    public function ignoredLinesFor(string $filename): array;
}
