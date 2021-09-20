<?php
/* 
 *  This is the default license template.
 *  
 *  File: SeekExceptionTest.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace GuzzleHttp\Tests\Stream\Exception;

use GuzzleHttp\Stream\Exception\SeekException;
use GuzzleHttp\Stream\Stream;

class SeekExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testHasStream()
    {
        $s = Stream::factory('foo');
        $e = new SeekException($s, 10);
        $this->assertSame($s, $e->getStream());
        $this->assertContains('10', $e->getMessage());
    }
}
