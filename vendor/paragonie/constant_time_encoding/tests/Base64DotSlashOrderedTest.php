<?php
/* 
 *  This is the default license template.
 *  
 *  File: Base64DotSlashOrderedTest.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

use \ParagonIE\ConstantTime\Base64DotSlashOrdered;

class Base64DotSlashOrderedTest extends PHPUnit\Framework\TestCase
{
    /**
     * @covers Base64DotSlashOrdered::encode()
     * @covers Base64DotSlashOrdered::decode()
     */
    public function testRandom()
    {
        for ($i = 1; $i < 32; ++$i) {
            for ($j = 0; $j < 50; ++$j) {
                $random = \random_bytes($i);

                $enc = Base64DotSlashOrdered::encode($random);
                $this->assertSame(
                    $random,
                    Base64DotSlashOrdered::decode($enc)
                );

                $unpadded = \rtrim($enc, '=');
                $this->assertSame(
                    $random,
                    Base64DotSlashOrdered::decode($unpadded)
                );
                $this->assertSame(
                    $random,
                    Base64DotSlashOrdered::decode($unpadded)
                );
            }
        }
    }
}
