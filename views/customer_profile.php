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
customer_checklogin();
$customer = $_SESSION['cus_id'];

/* Update Customer Profile */
if (isset($_POST['update_profile'])) {
    $cus_name = $_POST['cus_name'];
    $cus_mobile = $_POST['cus_mobile'];
    $cus_email = $_POST['cus_email'];
    $cus_adr = $_POST['cus_adr'];

    $query = "UPDATE  customer  SET  cus_name =?, cus_mobile =?, cus_email=?, cus_password = ?, cus_adr = ?  WHERE cus_id = ? ";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssssss', $cus_name, $cus_mobile, $cus_email, $cus_password, $cus_adr, $customer);
    $stmt->execute();

    if ($stmt) {
        $success = "$cus_name, Profile Updated";
    } else {
        $info = "Please Try Again Or Try Later";
    }
}


/* Update Auth Password */
if (isset($_POST['Update_Auth'])) {
    /* Customer Password */
    $old_password = sha1(md5($_POST['old_password']));
    $new_password  = sha1(md5($_POST['new_password']));
    $confirm_password  = sha1(md5($_POST['confirm_password']));
    /* Check If Old Passwords Match */
    $sql = "SELECT * FROM  customer WHERE cus_id = '$customer'";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);

        if ($old_password != $row['admin_password']) {
            $err =  "Please Enter Correct Old Password";
        } elseif ($new_password != $confirm_password) {
            $err = "Confirmation Password Does Not Match";
        } else {

            $query = "UPDATE customer SET  cus_password =? WHERE cus_id =?    ";
            $stmt = $mysqli->prepare($query);
            $rc = $stmt->bind_param('ss', $confirm_password, $cus_id);
            $stmt->execute();
            if ($stmt) {
                $success = "Login Details Updated";
            } else {
                $info = "Please Try Again Or Try Later";
            }
        }
    }
}

require_once('../partials/head.php');
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once('../partials/navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once('../partials/customer_sidebar.php');
        $ret = "SELECT * FROM customer WHERE cus_id = '$customer' ";
        $stmt = $mysqli->prepare($ret);
        $stmt->execute(); //ok
        $res = $stmt->get_result();
        while ($cus = $res->fetch_object()) {
        ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Manage Profile</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="customer_dashboard">Home</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card card-primary card-outline">
                                    <div class="card-body">
                                        <form method="post" enctype="multipart/form-data" role="form">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="">Name</label>
                                                        <input type="text" value="<?php echo $cus->cus_name; ?>" required name="cus_name" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="">Phone Number</label>
                                                        <input type="text" value="<?php echo $cus->cus_mobile; ?>" required name="cus_mobile" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="">Email</label>
                                                        <input type="text" value="<?php echo $cus->cus_email; ?>" required name="cus_email" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="">Address</label>
                                                        <textarea type="text" value="" required name="cus_adr" class="form-control"><?php echo $cus->cus_adr; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" name="update_profile" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div><!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-primary card-outline">
                                    <div class="card-body">
                                        <form method="post" enctype="multipart/form-data" role="form">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="">Old Password</label>
                                                        <input type="password" required name="old_password" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="">New Password</label>
                                                        <input type="password" required name="new_password" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="">Confirm New Password</label>
                                                        <input type="passowrd" required name="confirm_password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" name="Update_Auth" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div><!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php } ?>
        <?php require_once('../partials/footer.php'); ?>
    </div>
    <!-- ./wrapper -->
    <?php require_once('../partials/scripts.php'); ?>
</body>


</html>