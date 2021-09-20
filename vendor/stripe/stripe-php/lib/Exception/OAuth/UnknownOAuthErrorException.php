<?php
/* 
 *  This is the default license template.
 *  
 *  File: UnknownOAuthErrorException.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Stripe\Exception\OAuth;

/**
 * UnknownApiErrorException is thrown when the client library receives an
 * error from the OAuth API it doesn't know about. Receiving this error usually
 * means that your client library is outdated and should be upgraded.
 */
class UnknownOAuthErrorException extends OAuthErrorException
{
}
