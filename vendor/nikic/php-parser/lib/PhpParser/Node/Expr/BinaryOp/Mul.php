<?php
/* 
 *  This is the default license template.
 *  
 *  File: Mul.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class Mul extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '*';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_Mul';
    }
}
