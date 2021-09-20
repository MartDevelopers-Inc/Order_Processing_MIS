<?php
/* 
 *  This is the default license template.
 *  
 *  File: InflateStreamTest.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace GuzzleHttp\Tests\Stream;

use GuzzleHttp\Stream\InflateStream;
use GuzzleHttp\Stream\Stream;

class InflateStreamtest extends \PHPUnit_Framework_TestCase
{
    public function testInflatesStreams()
    {
        $content = gzencode('test');
        $a = Stream::factory($content);
        $b = new InflateStream($a);
        $this->assertEquals('test', (string) $b);
    }
}
