<?php
/* 
 *  This is the default license template.
 *  
 *  File: Wildcard.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Query;

/**
 * Wildcard query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-wildcard-query.html
 */
class Wildcard extends AbstractQuery
{
    /**
     * Rewrite methods: @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-multi-term-rewrite.html.
     */
    public const REWRITE_CONSTANT_SCORE = 'constant_score';
    public const REWRITE_CONSTANT_SCORE_BOOLEAN = 'constant_score_boolean';
    public const REWRITE_SCORING_BOOLEAN = 'scoring_boolean';

    /**
     * @var string
     */
    private $field;

    public function __construct(string $field, string $value, float $boost = 1.0)
    {
        $this->field = $field;

        $this->setParam($field, [
            'value' => $value,
            'boost' => $boost,
        ]);
    }

    public function getField(): string
    {
        return $this->field;
    }

    public function setValue(string $value): self
    {
        $data = $this->getParam($this->field);
        $this->setParam($this->field, \array_merge($data, ['value' => $value]));

        return $this;
    }

    public function setBoost(float $boost): self
    {
        $data = $this->getParam($this->field);
        $this->setParam($this->field, \array_merge($data, ['boost' => $boost]));

        return $this;
    }

    /**
     * Set the method used to rewrite the query.
     * Use one of the Wildcard::REWRITE_* constants, or provide your own.
     *
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-multi-term-rewrite.html
     */
    public function setRewrite(string $rewriteMode): self
    {
        $data = $this->getParam($this->field);
        $this->setParam($this->field, \array_merge($data, ['rewrite' => $rewriteMode]));

        return $this;
    }
}
