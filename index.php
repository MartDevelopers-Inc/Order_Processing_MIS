<?php
/*
 * Created on Mon Aug 09 2021
 *
 * The MIT License (MIT)
 * Copyright (c) 2021 Devlan Inc
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
 * TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */



/* Register Your Application Here */
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    /* Redirect If Main Url Is On HTTPS or HTTPS */
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
/* Redirect To Index Under Views, Also Include Folder Name */
header('Location: ' . $uri . '/DevlanInc_Lite_Framework/views/');
exit;
