<?php
/* 
 *  This is the default license template.
 *  
 *  File: ArrayableInterface.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica;

/**
 * Interface for params.
 *
 * @author Evgeniy Sokolov <ewgraf@gmail.com>
 */
interface ArrayableInterface
{
    /**
     * Converts the object to an array.
     *
     * @return array Object as array
     */
    public function toArray();
}
