<?php
/* 
 *  This is the default license template.
 *  
 *  File: NotImplementedException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Exception;

/**
 * Not implemented exception.
 *
 * Is thrown if a function or feature is not implemented yet
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 */
class NotImplementedException extends \BadMethodCallException implements ExceptionInterface
{
}
