<?php
/* 
 *  This is the default license template.
 *  
 *  File: Attachment.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Processor;

trigger_deprecation('ruflin/elastica', '7.1.0', 'The "%s" class is deprecated, use "%s" instead. It will be removed in 8.0.', Attachment::class, AttachmentProcessor::class);

/**
 * Elastica Attachment Processor.
 *
 * @author Federico Panini <fpanini@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/plugins/current/ingest-attachment.html
 * @deprecated since version 7.1.0, use the AttachmentProcessor class instead.
 */
class Attachment extends AttachmentProcessor
{
}
