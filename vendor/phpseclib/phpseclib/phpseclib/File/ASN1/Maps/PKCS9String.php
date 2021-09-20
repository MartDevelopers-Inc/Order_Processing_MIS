<?php
/* 
 *  This is the default license template.
 *  
 *  File: PKCS9String.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

/**
 * PKCS9String 
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
 * PKCS9String 
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class PKCS9String 
{
    const MAP = [
        'type'     => ASN1::TYPE_CHOICE,
        'children' => [
            'ia5String'       => ['type' => ASN1::TYPE_IA5_STRING],
            'directoryString' => DirectoryString::MAP
        ]
    ];
}
