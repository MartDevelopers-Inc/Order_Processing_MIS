<?php
/* 
 *  This is the default license template.
 *  
 *  File: Double.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\Cast;

use PhpParser\Node\Expr\Cast;

class Double extends Cast
{
    // For use in "kind" attribute
    const KIND_DOUBLE = 1; // "double" syntax
    const KIND_FLOAT = 2;  // "float" syntax
    const KIND_REAL = 3; // "real" syntax

    public function getType() : string {
        return 'Expr_Cast_Double';
    }
}
