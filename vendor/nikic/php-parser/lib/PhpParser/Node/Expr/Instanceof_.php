<?php
/* 
 *  This is the default license template.
 *  
 *  File: Instanceof_.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;
use PhpParser\Node\Name;

class Instanceof_ extends Expr
{
    /** @var Expr Expression */
    public $expr;
    /** @var Name|Expr Class name */
    public $class;

    /**
     * Constructs an instanceof check node.
     *
     * @param Expr      $expr       Expression
     * @param Name|Expr $class      Class name
     * @param array     $attributes Additional attributes
     */
    public function __construct(Expr $expr, $class, array $attributes = []) {
        $this->attributes = $attributes;
        $this->expr = $expr;
        $this->class = $class;
    }

    public function getSubNodeNames() : array {
        return ['expr', 'class'];
    }
    
    public function getType() : string {
        return 'Expr_Instanceof';
    }
}
