<?php
/* 
 *  This is the default license template.
 *  
 *  File: Unset_.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

class Unset_ extends Node\Stmt
{
    /** @var Node\Expr[] Variables to unset */
    public $vars;

    /**
     * Constructs an unset node.
     *
     * @param Node\Expr[] $vars       Variables to unset
     * @param array       $attributes Additional attributes
     */
    public function __construct(array $vars, array $attributes = []) {
        $this->attributes = $attributes;
        $this->vars = $vars;
    }

    public function getSubNodeNames() : array {
        return ['vars'];
    }
    
    public function getType() : string {
        return 'Stmt_Unset';
    }
}
