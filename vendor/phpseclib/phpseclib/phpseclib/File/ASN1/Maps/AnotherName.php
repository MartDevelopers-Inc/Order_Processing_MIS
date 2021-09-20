<?php
/* 
 *  This is the default license template.
 *  
 *  File: AnotherName.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

/**
 * AnotherName
 *
 * PHP version 5
 *
 * @category  File
 * @package   ASN1
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace phpseclib3\File\ASN1\Maps;

use phpseclib3\File\ASN1;

/**
 * AnotherName
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class AnotherName
{
    const MAP = [
        'type'     => ASN1::TYPE_SEQUENCE,
        'children' => [
             'type-id' => ['type' => ASN1::TYPE_OBJECT_IDENTIFIER],
             'value'   => [
                              'type' => ASN1::TYPE_ANY,
                              'constant' => 0,
                              'optional' => true,
                              'explicit' => true
                          ]
        ]
    ];
}
