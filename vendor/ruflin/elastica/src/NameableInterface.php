<?php
/* 
 *  This is the default license template.
 *  
 *  File: NameableInterface.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica;

/**
 * Interface for named objects.
 *
 * @author Evgeniy Sokolov <ewgraf@gmail.com>
 */
interface NameableInterface
{
    /**
     * Retrieve the name of this object.
     *
     * @return string
     */
    public function getName();

    /**
     * Set the name of this object.
     *
     * @return $this
     */
    public function setName(string $name);
}
