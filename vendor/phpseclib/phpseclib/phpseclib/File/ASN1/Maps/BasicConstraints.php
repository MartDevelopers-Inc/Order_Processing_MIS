<?php
/* 
 *  This is the default license template.
 *  
 *  File: BasicConstraints.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

/**
 * BasicConstraints
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
 * BasicConstraints
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class BasicConstraints
{
    const MAP = [
        'type'     => ASN1::TYPE_SEQUENCE,
        'children' => [
            'cA'                => [
                                             'type'     => ASN1::TYPE_BOOLEAN,
                                             'optional' => true,
                                             'default'  => false
                                   ],
            'pathLenConstraint' => [
                                             'type' => ASN1::TYPE_INTEGER,
                                             'optional' => true
                                   ]
        ]
    ];
}
