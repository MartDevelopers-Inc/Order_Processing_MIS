<?php
/* 
 *  This is the default license template.
 *  
 *  File: TerminalServiceFactory.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

// File generated from our OpenAPI spec

namespace Stripe\Service\Terminal;

/**
 * Service factory class for API resources in the Terminal namespace.
 *
 * @property ConnectionTokenService $connectionTokens
 * @property LocationService $locations
 * @property ReaderService $readers
 */
class TerminalServiceFactory extends \Stripe\Service\AbstractServiceFactory
{
    /**
     * @var array<string, string>
     */
    private static $classMap = [
        'connectionTokens' => ConnectionTokenService::class,
        'locations' => LocationService::class,
        'readers' => ReaderService::class,
    ];

    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
