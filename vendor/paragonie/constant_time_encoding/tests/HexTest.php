<?php
/* 
 *  This is the default license template.
 *  
 *  File: HexTest.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

use \ParagonIE\ConstantTime\Hex;

class HexTest extends PHPUnit\Framework\TestCase
{
    /**
     * @covers Hex::encode()
     * @covers Hex::decode()
     * @covers Hex::encodeUpper()
     */
    public function testRandom()
    {
        for ($i = 1; $i < 32; ++$i) {
            for ($j = 0; $j < 50; ++$j) {
                $random = \random_bytes($i);

                $enc = Hex::encode($random);
                $this->assertSame(
                    $random,
                    Hex::decode($enc)
                );
                $this->assertSame(
                    \bin2hex($random),
                    $enc
                );

                $enc = Hex::encodeUpper($random);
                $this->assertSame(
                    $random,
                    Hex::decode($enc)
                );
                $this->assertSame(
                    \strtoupper(\bin2hex($random)),
                    $enc
                );
            }
        }
    }
}
