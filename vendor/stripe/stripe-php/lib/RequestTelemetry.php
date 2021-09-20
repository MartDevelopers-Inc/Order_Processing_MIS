<?php
/* 
 *  This is the default license template.
 *  
 *  File: RequestTelemetry.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Stripe;

/**
 * Class RequestTelemetry.
 *
 * Tracks client request telemetry
 */
class RequestTelemetry
{
    public $requestId;
    public $requestDuration;

    /**
     * Initialize a new telemetry object.
     *
     * @param string $requestId the request's request ID
     * @param int $requestDuration the request's duration in milliseconds
     */
    public function __construct($requestId, $requestDuration)
    {
        $this->requestId = $requestId;
        $this->requestDuration = $requestDuration;
    }
}
