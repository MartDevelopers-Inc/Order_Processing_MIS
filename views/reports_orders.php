<?php

/*
 * Created on Sun Sep 12 2021
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

session_start();
require_once('../config/config.php');
require_once('../config/checklogin.php');
admin_checklogin();
require_once('../partials/head.php');
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once('../partials/navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once('../partials/sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-bold">Orders Reports</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                <li class="breadcrumb-item active">Orders - Reports</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <table id="report" class="table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Product </th>
                                        <th>Supplier </th>
                                        <th>Shipping Agent</th>
                                        <th>Customer</th>
                                        <th>Status & Date</th>
                                        <th>Order Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret = "SELECT * FROM orders o 
                                    INNER JOIN products p ON p.p_id = o.o_p_id
                                    INNER JOIN product_categories pc ON pc.pc_id = p.p_pc_id
                                    INNER JOIN supplier s ON s.sup_id = o.o_s_id
                                    INNER JOIN shipping_agent sa ON sa.sa_id = o.o_sa_id
                                    INNER JOIN customer c ON c.cus_id = o.o_c_id
                                    ";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    while ($orders = $res->fetch_object()) {
                                    ?>
                                        <tr>
                                            <td>
                                                Name: <?php echo $orders->p_name; ?><br>
                                                Category: <?php echo $orders->pc_name; ?>
                                            </td>
                                            <td>
                                                Name: <?php echo $orders->sup_name; ?><br>
                                                Contact: <?php echo $orders->sup_mobile; ?><br>
                                                Email: <?php echo $orders->sup_email; ?>
                                            </td>
                                            <td>
                                                Name: <?php echo $orders->sa_name; ?><br>
                                                Contact : <?php echo $orders->sa_mobile; ?><br>
                                                Email : <?php echo $orders->sa_email; ?>
                                            </td>
                                            <td>
                                                Name: <?php echo $orders->cus_name; ?><br>
                                                Contact : <?php echo $orders->cus_mobile; ?><br>
                                                Email : <?php echo $orders->cus_email; ?>
                                            </td>
                                            <td>
                                                Status : <?php echo $orders->o_status; ?><br>
                                                Date : <?php echo $orders->o_date; ?>
                                            </td>
                                            <td>
                                                <?php echo $orders->o_details; ?>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Main Footer -->
        <?php require_once('../partials/footer.php'); ?>
    </div>
    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>