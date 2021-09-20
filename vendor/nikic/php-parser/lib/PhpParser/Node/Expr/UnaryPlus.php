<?php
/* 
 *  This is the default license template.
 *  
 *  File: UnaryPlus.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

class UnaryPlus extends Expr
{
    /** @var Expr Expression */
    public $expr;

    /**
     * Constructs a unary plus node.
     *
     * @param Expr $expr       Expression
     * @param array               $attributes Additional attributes
     */
    public function __construct(Expr $expr, array $attributes = []) {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }

    public function getSubNodeNames() : array {
        return ['expr'];
    }
    
    public function getType() : string {
        return 'Expr_UnaryPlus';
    }
}
