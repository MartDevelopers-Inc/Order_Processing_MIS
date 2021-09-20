<?php
/* 
 *  This is the default license template.
 *  
 *  File: Raw.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

/**
 * Raw DSA Signature Handler
 *
 * PHP version 5
 *
 * @category  Crypt
 * @package   DSA
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace phpseclib3\Crypt\DSA\Formats\Signature;

use phpseclib3\Crypt\Common\Formats\Signature\Raw as Progenitor;

/**
 * Raw DSA Signature Handler
 *
 * @package DSA
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class Raw extends Progenitor
{
}
