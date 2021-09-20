<?php
/* 
 *  This is the default license template.
 *  
 *  File: Token.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class Token {

    /** @var int */
    private $line;

    /** @var string */
    private $name;

    /** @var string */
    private $value;

    /**
     * Token constructor.
     */
    public function __construct(int $line, string $name, string $value) {
        $this->line  = $line;
        $this->name  = $name;
        $this->value = $value;
    }

    public function getLine(): int {
        return $this->line;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getValue(): string {
        return $this->value;
    }
}
