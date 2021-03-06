<?php
/* 
 *  This is the default license template.
 *  
 *  File: DateProcessor.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Processor;

/**
 * Elastica Date Processor.
 *
 * @author Federico Panini <fpanini@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/date-processor.html
 */
class DateProcessor extends AbstractProcessor
{
    public const DEFAULT_TARGET_FIELD_VALUE = '@timestamp';
    public const DEFAULT_TIMEZONE_VALUE = 'UTC';
    public const DEFAULT_LOCALE_VALUE = 'ENGLISH';

    public function __construct(string $field, array $formats)
    {
        $this->setField($field);
        $this->setFormats($formats);
    }

    /**
     * Set field.
     *
     * @return $this
     */
    public function setField(string $field): self
    {
        return $this->setParam('field', $field);
    }

    /**
     * Set field format. Joda pattern or one of the following formats ISO8601, UNIX, UNIX_MS, or TAI64N.
     *
     * @return $this
     */
    public function setFormats(array $formats): self
    {
        return $this->setParam('formats', $formats);
    }

    /**
     * Set target_field. Default value @timestamp.
     *
     * @return $this
     */
    public function setTargetField(string $targetField): self
    {
        return $this->setParam('target_field', $targetField);
    }

    /**
     * Set the timezone use when parsing the date. Default UTC.
     *
     * @return $this
     */
    public function setTimezone(string $timezone): self
    {
        return $this->setParam('timezone', $timezone);
    }

    /**
     * Set the locale to use when parsing the date.
     *
     * @return $this
     */
    public function setLocale(string $locale): self
    {
        return $this->setParam('locale', $locale);
    }
}
