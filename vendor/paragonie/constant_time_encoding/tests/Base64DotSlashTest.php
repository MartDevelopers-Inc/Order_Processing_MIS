<?php
/* 
 *  This is the default license template.
 *  
 *  File: Base64DotSlashTest.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

use \ParagonIE\ConstantTime\Base64DotSlash;

class Base64DotSlashTest extends PHPUnit\Framework\TestCase
{
    /**
     * @covers Base64DotSlash::encode()
     * @covers Base64DotSlash::decode()
     */
    public function testRandom()
    {
        for ($i = 1; $i < 32; ++$i) {
            for ($j = 0; $j < 50; ++$j) {
                $random = \random_bytes($i);

                $enc = Base64DotSlash::encode($random);
                $this->assertSame(
                    $random,
                    Base64DotSlash::decode($enc)
                );

                $unpadded = \rtrim($enc, '=');
                $this->assertSame(
                    $random,
                    Base64DotSlash::decode($unpadded)
                );
                $this->assertSame(
                    $random,
                    Base64DotSlash::decode($unpadded)
                );
            }
        }
    }
}
