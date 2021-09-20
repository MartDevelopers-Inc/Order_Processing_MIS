<?php
/* 
 *  This is the default license template.
 *  
 *  File: IdempotencyException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Stripe\Exception;

/**
 * IdempotencyException is thrown in cases where an idempotency key was used
 * improperly.
 */
class IdempotencyException extends ApiErrorException
{
}
