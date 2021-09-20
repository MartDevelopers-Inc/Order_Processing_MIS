<?php
/* 
 *  This is the default license template.
 *  
 *  File: TokenEmulator.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Lexer\TokenEmulator;

/** @internal */
abstract class TokenEmulator
{
    abstract public function getPhpVersion(): string;

    abstract public function isEmulationNeeded(string $code): bool;

    /**
     * @return array Modified Tokens
     */
    abstract public function emulate(string $code, array $tokens): array;

    /**
     * @return array Modified Tokens
     */
    abstract public function reverseEmulate(string $code, array $tokens): array;

    public function preprocessCode(string $code, array &$patches): string {
        return $code;
    }
}
