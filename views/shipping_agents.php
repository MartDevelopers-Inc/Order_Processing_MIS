<?php
/* 
 *  This is the default license template.
 *  
 *  File: shipping_agents.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

/*
 * Created on Sun Sep 19 2021
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
/* Add */
if (isset($_POST['add_shipping_agent'])) {

    $sa_name = $_POST['sa_name'];
    $sa_mobile = $_POST['sa_mobile'];
    $sa_email = $_POST['sa_email'];
    $sa_adr = $_POST['sa_adr'];

    /* Prevent Double Entries */
    $sql = "SELECT * FROM  shipping_agent WHERE sa_email = '$sa_email'   ";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($sa_email == $row['sa_email']) {
            $err =  "$sa_email Already Exists";
        }
    } else {
        $query = "INSERT INTO shipping_agent (sa_name, sa_mobile, sa_email, sa_adr) VALUES(?,?,?,?) ";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('ssss', $sa_name, $sa_mobile, $sa_email, $sa_adr);
        $stmt->execute();

        if ($stmt) {
            $success = "$sa_name Added";
        } else {
            $info = "Please Try Again Or Try Later";
        }
    }
}

/* Update Shipping Agent */
if (isset($_POST['update_shipping_agent'])) {
    $sa_name = $_POST['sa_name'];
    $sa_mobile = $_POST['sa_mobile'];
    $sa_email = $_POST['sa_email'];
    $sa_adr = $_POST['sa_adr'];
    $sa_id = $_POST['sa_id'];

    $query = "UPDATE  shipping_agent  SET  sa_name =?, sa_mobile =?, sa_email=?, sa_adr = ? WHERE sa_id = ? ";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('sssss', $sa_name, $sa_mobile, $sa_email, $sa_adr, $sa_id);
    $stmt->execute();

    if ($stmt) {
        $success = "$sa_name Updated";
    } else {
        $info = "Please Try Again Or Try Later";
    }
}

/* Delete Shipping Agent */
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    $adn = "DELETE FROM shipping_agent WHERE sa_id=?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $delete);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=shipping_agents");
    } else {
        $info = "Please Try Again Or Try Later";
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
        <?php require_once('../partials/sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-bold">Shipping Agents</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                <li class="breadcrumb-item active">Shipping Agents</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_modal">Add Shipping Agent</button>
                    </div>
                    <hr>
                    <!-- Add Modal -->
                    <div class="modal fade" id="add_modal">
                        <div class="modal-dialog  modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Fill All Values </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data" role="form">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Name</label>
                                                    <input type="text" required name="sa_name" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Phone Number</label>
                                                    <input type="text" required name="sa_mobile" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Email</label>
                                                    <input type="text" required name="sa_email" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Address</label>
                                                    <input type="text" required name="sa_adr" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" name="add_shipping_agent" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Contacts </th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret = "SELECT * FROM shipping_agent ";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    while ($supplier = $res->fetch_object()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $supplier->sa_name; ?></td>
                                            <td><?php echo $supplier->sa_mobile; ?></td>
                                            <td><?php echo $supplier->sa_email; ?></td>
                                            <td><?php echo $supplier->sa_adr; ?></td>
                                            <td>
                                                <a class="badge badge-primary" data-toggle="modal" href="#edit-<?php echo $supplier->sa_id; ?>">
                                                    <i class="fas fa-edit"></i>
                                                    Update
                                                </a>
                                                <a class="badge badge-danger" data-toggle="modal" href="#delete-<?php echo $supplier->sa_id; ?>">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </a>
                                                <!-- Update Modal -->
                                                <div class="modal fade" id="edit-<?php echo $supplier->sa_id; ?>">
                                                    <div class="modal-dialog  modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Fill All Values </h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" enctype="multipart/form-data" role="form">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="">Name</label>
                                                                                <input type="text" value="<?php echo $supplier->sa_name; ?>" required name="sa_name" class="form-control">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="">Phone Number</label>
                                                                                <input type="text" value="<?php echo $supplier->sa_mobile; ?>" required name="sa_mobile" class="form-control">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="">Email</label>
                                                                                <input type="text" value="<?php echo $supplier->sa_email; ?>" required name="sa_email" class="form-control">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="">Address</label>
                                                                                <input type="text" required name="sa_adr" value="<?php echo $supplier->sa_adr; ?>" class="form-control">
                                                                                <input type="hidden" value="<?php echo $supplier->sa_id; ?>" required name="sa_id" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <button type="submit" name="update_shipping_agent" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->

                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="delete-<?php echo $supplier->sa_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">CONFIRM</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center text-danger">
                                                                <h4>Delete <?php echo $supplier->sa_name; ?> ?</h4>
                                                                <br>
                                                                <p>Heads Up, You are about to delete <?php echo $supplier->sa_name; ?>. This action is irrevisble.</p>
                                                                <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                                <a href="shipping_agents?delete=<?php echo $supplier->sa_id; ?>" class="text-center btn btn-danger"> Delete </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
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