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
suppplier_checklogin();
/* Add */
if (isset($_POST['add_product'])) {

    $p_pc_id = $_POST['p_pc_id'];
    $p_name = $_POST['p_name'];
    $p_details = $_POST['p_details'];
    $p_quantity = $_POST['p_quantity'];

    /* Prevent Double Entries */
    $sql = "SELECT * FROM  products WHERE p_name = '$p_name'   ";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($p_name == $row['p_name']) {
            $err =  "$p_name Already Exists";
        }
    } else {
        $query = "INSERT INTO products (p_pc_id, p_name, p_details, p_quantity) VALUES(?,?,?,?) ";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('ssss', $p_pc_id, $p_name, $p_details, $p_quantity);
        $stmt->execute();

        if ($stmt) {
            $success = "$p_name Added";
        } else {
            $info = "Please Try Again Or Try Later";
        }
    }
}

/* Update Company Category */
if (isset($_POST['update_product'])) {
    $p_name = $_POST['p_name'];
    $p_details = $_POST['p_details'];
    $p_quantity = $_POST['p_quantity'];
    $p_id = $_POST['p_id'];

    $query = "UPDATE  products SET  p_name =?, p_details =?, p_quantity=? WHERE p_id = ? ";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssss', $p_name, $p_details, $p_quantity, $p_id);
    $stmt->execute();

    if ($stmt) {
        $success = "$p_name Updated";
    } else {
        $info = "Please Try Again Or Try Later";
    }
}

/* Delete Company Category */
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    $adn = "DELETE FROM products WHERE p_id=?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $delete);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=supplier_products");
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
        <?php require_once('../partials/supplier_sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-bold">Products</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="supplier_dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                <li class="breadcrumb-item active">Products</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_modal">Add Product</button>
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
                                                <div class="form-group col-md-4">
                                                    <label for="">Name</label>
                                                    <input type="text" required name="p_name" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">Quantity</label>
                                                    <input type="text" required name="p_quantity" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">Product Category</label>
                                                    <select type="text" required name="p_pc_id" class="form-control">
                                                        <?php
                                                        $ret = "SELECT * FROM product_categories ";
                                                        $stmt = $mysqli->prepare($ret);
                                                        $stmt->execute(); //ok
                                                        $res = $stmt->get_result();
                                                        while ($categories = $res->fetch_object()) {
                                                        ?>
                                                            <option value="<?php echo $categories->pc_id; ?>"><?php echo $categories->pc_name; ?></option>
                                                        <?php
                                                        } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputPassword1"> Details</label>
                                                    <textarea name="p_details" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" name="add_product" class="btn btn-primary">Submit</button>
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
                                        <th>Product Name</th>
                                        <th>Category </th>
                                        <th>Quantity</th>
                                        <th>Details </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret = "SELECT * FROM products p 
                                    INNER JOIN product_categories pc ON p.p_pc_id = pc.pc_id";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    while ($product = $res->fetch_object()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $product->p_name; ?></td>
                                            <td><?php echo $product->pc_name; ?></td>
                                            <td><?php echo $product->p_quantity; ?></td>
                                            <td><?php echo $product->p_details; ?></td>
                                            <td>
                                                <a class="badge badge-primary" data-toggle="modal" href="#edit-<?php echo $product->p_id; ?>">
                                                    <i class="fas fa-edit"></i>
                                                    Update
                                                </a>
                                                <a class="badge badge-danger" data-toggle="modal" href="#delete-<?php echo $product->p_id; ?>">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </a>
                                                <!-- Update Modal -->
                                                <div class="modal fade" id="edit-<?php echo $product->p_id; ?>">
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
                                                                                <input type="text" required name="p_name" value="<?php echo $product->p_name; ?>" class="form-control">
                                                                                <input type="hidden" required name="p_id" value="<?php echo $product->p_id; ?>" class="form-control">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="">Quantity</label>
                                                                                <input type="text" required value="<?php echo $product->p_quantity; ?>" name="p_quantity" class="form-control">
                                                                            </div>
                                                                            <div class="form-group col-md-12">
                                                                                <label for="exampleInputPassword1"> Details</label>
                                                                                <textarea name="p_details" rows="5" class="form-control"><?php echo $product->p_details; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <button type="submit" name="update_product" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->

                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="delete-<?php echo $product->p_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">CONFIRM</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center text-danger">
                                                                <h4>Delete <?php echo $product->p_name; ?> ?</h4>
                                                                <br>
                                                                <p>Heads Up, You are about to delete <?php echo $product->p_name; ?>. This action is irrevisble.</p>
                                                                <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                                <a href="supplier_products?delete=<?php echo $product->p_id; ?>" class="text-center btn btn-danger"> Delete </a>
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