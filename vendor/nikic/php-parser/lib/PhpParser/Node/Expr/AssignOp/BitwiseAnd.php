<?php
/* 
 *  This is the default license template.
 *  
 *  File: BitwiseAnd.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\AssignOp;

use PhpParser\Node\Expr\AssignOp;

class BitwiseAnd extends AssignOp
{
    public function getType() : string {
        return 'Expr_AssignOp_BitwiseAnd';
    }
}
