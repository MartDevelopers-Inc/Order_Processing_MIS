<?php
/* 
 *  This is the default license template.
 *  
 *  File: Extensions.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

/**
 * Extensions
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
 * Extensions
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class Extensions
{
    const MAP = [
        'type'     => ASN1::TYPE_SEQUENCE,
        'min'      => 1,
        // technically, it's MAX, but we'll assume anything < 0 is MAX
        'max'      => -1,
        // if 'children' isn't an array then 'min' and 'max' must be defined
        'children' => Extension::MAP
    ];
}
