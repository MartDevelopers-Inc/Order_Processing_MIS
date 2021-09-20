<?php
/* 
 *  This is the default license template.
 *  
 *  File: FnTokenEmulator.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Lexer\TokenEmulator;

use PhpParser\Lexer\Emulative;

final class FnTokenEmulator extends KeywordEmulator
{
    public function getPhpVersion(): string
    {
        return Emulative::PHP_7_4;
    }

    public function getKeywordString(): string
    {
        return 'fn';
    }

    public function getKeywordToken(): int
    {
        return \T_FN;
    }
}