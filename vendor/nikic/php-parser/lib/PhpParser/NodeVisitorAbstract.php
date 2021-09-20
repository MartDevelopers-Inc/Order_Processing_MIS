<?php
/* 
 *  This is the default license template.
 *  
 *  File: NodeVisitorAbstract.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

<?php declare(strict_types=1);

namespace PhpParser;

/**
 * @codeCoverageIgnore
 */
class NodeVisitorAbstract implements NodeVisitor
{
    public function beforeTraverse(array $nodes) {
        return null;
    }

    public function enterNode(Node $node) {
        return null;
    }

    public function leaveNode(Node $node) {
        return null;
    }

    public function afterTraverse(array $nodes) {
        return null;
    }
}
