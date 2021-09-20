<?php
/* 
 *  This is the default license template.
 *  
 *  File: AuthenticationException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Stripe\Exception;

/**
 * AuthenticationException is thrown when invalid credentials are used to
 * connect to Stripe's servers.
 */
class AuthenticationException extends ApiErrorException
{
}
