<?php
/* 
 *  This is the default license template.
 *  
 *  File: ProcessingBuilder.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\ResultSet;

use Elastica\Query;
use Elastica\Response;
use Elastica\ResultSet;

class ProcessingBuilder implements BuilderInterface
{
    /**
     * @var BuilderInterface
     */
    private $builder;

    /**
     * @var ProcessorInterface
     */
    private $processor;

    public function __construct(BuilderInterface $builder, ProcessorInterface $processor)
    {
        $this->builder = $builder;
        $this->processor = $processor;
    }

    /**
     * Runs any registered transformers on the ResultSet before
     * returning it, allowing the transformers to inject additional
     * data into each Result.
     */
    public function buildResultSet(Response $response, Query $query): ResultSet
    {
        $resultSet = $this->builder->buildResultSet($response, $query);

        $this->processor->process($resultSet);

        return $resultSet;
    }
}
