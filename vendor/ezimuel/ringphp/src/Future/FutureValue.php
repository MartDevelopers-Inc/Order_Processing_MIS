<?php
/* 
 *  This is the default license template.
 *  
 *  File: FutureValue.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace GuzzleHttp\Ring\Future;

/**
 * Represents a future value that responds to wait() to retrieve the promised
 * value, but can also return promises that are delivered the value when it is
 * available.
 */
class FutureValue implements FutureInterface
{
    use BaseFutureTrait;
}
