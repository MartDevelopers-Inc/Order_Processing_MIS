<?php
/* 
 *  This is the default license template.
 *  
 *  File: CompletedFutureValueTest.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace GuzzleHttp\Tests\Ring\Future;

use GuzzleHttp\Ring\Exception\CancelledFutureAccessException;
use GuzzleHttp\Ring\Future\CompletedFutureValue;

class CompletedFutureValueTest extends \PHPUnit_Framework_TestCase
{
    public function testReturnsValue()
    {
        $f = new CompletedFutureValue('hi');
        $this->assertEquals('hi', $f->wait());
        $f->cancel();

        $a = null;
        $f->then(function ($v) use (&$a) {
            $a = $v;
        });
        $this->assertSame('hi', $a);
    }

    public function testThrows()
    {
        $ex = new \Exception('foo');
        $f = new CompletedFutureValue(null, $ex);
        $f->cancel();
        try {
            $f->wait();
            $this->fail('did not throw');
        } catch (\Exception $e) {
            $this->assertSame($e, $ex);
        }
    }

    public function testMarksAsCancelled()
    {
        $ex = new CancelledFutureAccessException();
        $f = new CompletedFutureValue(null, $ex);
        try {
            $f->wait();
            $this->fail('did not throw');
        } catch (\Exception $e) {
            $this->assertSame($e, $ex);
        }
    }
}
