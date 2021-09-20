<?php
/* 
 *  This is the default license template.
 *  
 *  File: InvalidDsnException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

declare(strict_types=1);

namespace Nyholm\Dsn\Exception;

/**
 * Base exception when DSN is not valid.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class InvalidDsnException extends InvalidArgumentException
{
    /**
     * @var string
     */
    private $dsn;

    public function __construct(string $dsn, string $message)
    {
        $this->dsn = $dsn;
        parent::__construct(sprintf('%s (%s)', $message, $dsn));
    }

    public function getDsn(): string
    {
        return $this->dsn;
    }
}
