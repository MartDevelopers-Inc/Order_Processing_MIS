<?php
/* 
 *  This is the default license template.
 *  
 *  File: Echo_.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

class Echo_ extends Node\Stmt
{
    /** @var Node\Expr[] Expressions */
    public $exprs;

    /**
     * Constructs an echo node.
     *
     * @param Node\Expr[] $exprs      Expressions
     * @param array       $attributes Additional attributes
     */
    public function __construct(array $exprs, array $attributes = []) {
        $this->attributes = $attributes;
        $this->exprs = $exprs;
    }

    public function getSubNodeNames() : array {
        return ['exprs'];
    }
    
    public function getType() : string {
        return 'Stmt_Echo';
    }
}
