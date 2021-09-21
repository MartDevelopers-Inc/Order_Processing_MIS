<?php

/*
 * Created on Mon Sep 06 2021
 *
 * Mart Developers Inc
 * https://martdev.info
 * martdevelopers254@gmail.com
 * +254 740 847 563 / +254 737 229 776
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

/* Load Analytics */

$supplier = $_SESSION['sup_id'];


/* Pending Orders */
$query = "SELECT COUNT(*)  FROM `orders` WHERE o_status = 'Pending'  AND o_s_id = '$supplier' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($orders_pending);
$stmt->fetch();
$stmt->close();


/* Processed Orders */
$query = "SELECT COUNT(*)  FROM `orders` WHERE o_status = 'Processed' AND o_s_id = '$supplier'";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($orders_processed);
$stmt->fetch();
$stmt->close();
