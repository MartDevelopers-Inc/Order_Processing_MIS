<?php
/* 
 *  This is the default license template.
 *  
 *  File: ApiConnectionException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Stripe\Exception;

/**
 * ApiConnection is thrown in the event that the SDK can't connect to Stripe's
 * servers. That can be for a variety of different reasons from a downed
 * network to a bad TLS certificate.
 */
class ApiConnectionException extends ApiErrorException
{
}
