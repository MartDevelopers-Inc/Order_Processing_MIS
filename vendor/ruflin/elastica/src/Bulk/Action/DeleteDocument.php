<?php
/* 
 *  This is the default license template.
 *  
 *  File: DeleteDocument.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Bulk\Action;

use Elastica\AbstractUpdateAction;

class DeleteDocument extends AbstractDocument
{
    /**
     * @var string
     */
    protected $_opType = self::OP_TYPE_DELETE;

    /**
     * {@inheritdoc}
     */
    protected function _getMetadata(AbstractUpdateAction $action): array
    {
        return $action->getOptions([
            '_index',
            '_id',
            'version',
            'version_type',
            'routing',
            'parent',
        ]);
    }
}
