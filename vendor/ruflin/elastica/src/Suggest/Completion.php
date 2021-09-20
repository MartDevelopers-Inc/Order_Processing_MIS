<?php
/* 
 *  This is the default license template.
 *  
 *  File: Completion.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Suggest;

/**
 * Completion suggester.
 *
 * @author Igor Denisenko <im.denisenko@yahoo.com>
 *
 * @see   https://www.elastic.co/guide/en/elasticsearch/reference/current/search-suggesters-completion.html
 */
class Completion extends AbstractSuggest
{
    /**
     * Set fuzzy parameter.
     *
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/search-suggesters-completion.html#fuzzy
     *
     * @return $this
     */
    public function setFuzzy(array $fuzzy): Completion
    {
        return $this->setParam('fuzzy', $fuzzy);
    }
}
