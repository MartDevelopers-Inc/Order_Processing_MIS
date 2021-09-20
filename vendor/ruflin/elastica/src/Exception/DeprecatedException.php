<?php
/* 
 *  This is the default license template.
 *  
 *  File: DeprecatedException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Exception;

/**
 * Deprecated exception.
 *
 * Is thrown if a function or feature is deprecated and its usage can't be supported by BC layer
 *
 * @author Evgeniy Sokolov <ewgraf@gmail.com>
 */
class DeprecatedException extends NotImplementedException
{
}
