<?php
/* 
 *  This is the default license template.
 *  
 *  File: bootstrap.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/Client/Server.php';

use GuzzleHttp\Tests\Ring\Client\Server;

Server::start();

register_shutdown_function(function () {
    Server::stop();
});
