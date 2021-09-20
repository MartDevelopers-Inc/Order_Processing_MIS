<?php
/* 
 *  This is the default license template.
 *  
 *  File: Https.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Transport;

/**
 * Elastica Http Transport object.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 */
class Https extends Http
{
    /**
     * Https scheme.
     *
     * @var string https scheme
     */
    protected $_scheme = 'https';
}
