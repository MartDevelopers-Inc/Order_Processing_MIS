<?php
/* 
 *  This is the default license template.
 *  
 *  File: Else_.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

class Else_ extends Node\Stmt
{
    /** @var Node\Stmt[] Statements */
    public $stmts;

    /**
     * Constructs an else node.
     *
     * @param Node\Stmt[] $stmts      Statements
     * @param array       $attributes Additional attributes
     */
    public function __construct(array $stmts = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->stmts = $stmts;
    }

    public function getSubNodeNames() : array {
        return ['stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Else';
    }
}
