<?php
/* 
 *  This is the default license template.
 *  
 *  File: Array_.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\Cast;

use PhpParser\Node\Expr\Cast;

class Array_ extends Cast
{
    public function getType() : string {
        return 'Expr_Cast_Array';
    }
}
