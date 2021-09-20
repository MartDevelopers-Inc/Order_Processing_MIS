<?php
/* 
 *  This is the default license template.
 *  
 *  File: Match_.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node;
use PhpParser\Node\MatchArm;

class Match_ extends Node\Expr
{
    /** @var Node\Expr */
    public $cond;
    /** @var MatchArm[] */
    public $arms;

    /**
     * @param MatchArm[] $arms
     */
    public function __construct(Node\Expr $cond, array $arms = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->cond = $cond;
        $this->arms = $arms;
    }

    public function getSubNodeNames() : array {
        return ['cond', 'arms'];
    }

    public function getType() : string {
        return 'Expr_Match';
    }
}
