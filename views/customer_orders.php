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

/* Add */
if (isset($_POST['add_order'])) {

    $o_p_id = $_POST['o_p_id'];
    $o_c_id = $_POST['o_c_id'];
    $o_s_id = $_POST['o_s_id'];
    $o_sa_id = $_POST['o_sa_id'];
    $o_details = $_POST['o_details'];
    $o_quantity = $_POST['o_quantity'];
    $o_date = date('d M Y');
    $o_status = 'Pending';

    /* Prevent Double Entries */
    $query = "INSERT INTO orders (o_p_id, o_c_id, o_s_id, o_sa_id, o_details, o_quantity, o_date, o_status) VALUES(?,?,?,?,?,?,?,?) ";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssssssss', $o_p_id, $o_c_id, $o_s_id, $o_sa_id, $o_details, $o_quantity, $o_date, $o_status);
    $stmt->execute();

    if ($stmt) {
        $success = "Order Added";
    } else {
        $info = "Please Try Again Or Try Later";
    }
}


/* Update Order */
if (isset($_POST['update_order'])) {
    $o_details = $_POST['o_details'];
    $o_quantity = $_POST['o_quantity'];
    $o_date = date('d M Y');
    $o_id = $_POST['o_id'];

    $query = "UPDATE  orders  SET  o_details =?, o_quantity =?, o_date =?  WHERE o_id = ? ";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssss', $o_details, $o_quantity, $o_date, $o_id);
    $stmt->execute();

    if ($stmt) {
        $success = "Order Updated";
    } else {
        $info = "Please Try Again Or Try Later";
    }
}

/* Delete Order */
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    $adn = "DELETE FROM orders WHERE o_id=?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $delete);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=customer_orders");
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
        <?php require_once('../partials/customer_sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-bold">Orders</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="customer_dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                <li class="breadcrumb-item active">Orders</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_modal">Add Order</button>
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
                                                    <label for="">Customer Name</label>
                                                    <select type="text" readonly required name="o_c_id" class="form-control">
                                                        <?php
                                                        $customer_id = $_SESSION['cus_id'];
                                                        $ret = "SELECT * FROM customer WHERE cus_id = '$customer_id' ";
                                                        $stmt = $mysqli->prepare($ret);
                                                        $stmt->execute(); //ok
                                                        $res = $stmt->get_result();
                                                        while ($customer = $res->fetch_object()) {
                                                        ?>
                                                            <option value="<?php echo $customer->cus_id; ?>"><?php echo $customer->cus_name; ?></option>
                                                        <?php
                                                        } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Supplier Name</label>
                                                    <select type="text" required name="o_s_id" class="form-control">
                                                        <?php
                                                        $ret = "SELECT * FROM supplier ";
                                                        $stmt = $mysqli->prepare($ret);
                                                        $stmt->execute(); //ok
                                                        $res = $stmt->get_result();
                                                        while ($supplier = $res->fetch_object()) {
                                                        ?>
                                                            <option value="<?php echo $supplier->sup_id; ?>"><?php echo $supplier->sup_name; ?></option>
                                                        <?php
                                                        } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Shipping Agent Name</label>
                                                    <select type="text" required name="o_sa_id" class="form-control">
                                                        <?php
                                                        $ret = "SELECT * FROM shipping_agent ";
                                                        $stmt = $mysqli->prepare($ret);
                                                        $stmt->execute(); //ok
                                                        $res = $stmt->get_result();
                                                        while ($sa = $res->fetch_object()) {
                                                        ?>
                                                            <option value="<?php echo $sa->sa_id; ?>"><?php echo $sa->sa_name; ?></option>
                                                        <?php
                                                        } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Order Product Name</label>
                                                    <select type="text" required name="o_p_id" class="form-control">
                                                        <?php
                                                        $ret = "SELECT * FROM products ";
                                                        $stmt = $mysqli->prepare($ret);
                                                        $stmt->execute(); //ok
                                                        $res = $stmt->get_result();
                                                        while ($p = $res->fetch_object()) {
                                                        ?>
                                                            <option value="<?php echo $p->p_id; ?>"><?php echo $p->p_name; ?></option>
                                                        <?php
                                                        } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Order Quantity </label>
                                                    <input type="text" required name="o_quantity" class="form-control">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Order Details</label>
                                                    <textarea rows="3" type="text" required name="o_details" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" name="add_order" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                    <div class="row">
                        <div class="col-12">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Product </th>
                                        <th>Supplier </th>
                                        <th>Shipping Agent</th>
                                        <th>Order Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $customer_id = $_SESSION['cus_id'];
                                    $ret = "SELECT * FROM orders o 
                                    INNER JOIN products p ON p.p_id = o.o_p_id
                                    INNER JOIN product_categories pc ON pc.pc_id = p.p_pc_id
                                    INNER JOIN supplier s ON s.sup_id = o.o_s_id
                                    INNER JOIN shipping_agent sa ON sa.sa_id = o.o_sa_id
                                    INNER JOIN customer c ON c.cus_id = o.o_c_id
                                    WHERE c.cus_id = '$customer_id'
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
                                                <?php echo $orders->o_details; ?>
                                            </td>
                                            <td>
                                                <a class="badge badge-primary" data-toggle="modal" href="#edit-<?php echo $orders->o_id; ?>">
                                                    <i class="fas fa-edit"></i>
                                                    Update
                                                </a>
                                                <a class="badge badge-danger" data-toggle="modal" href="#delete-<?php echo $orders->o_id; ?>">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </a>
                                                <!-- Update Modal -->
                                                <div class="modal fade" id="edit-<?php echo $orders->o_id; ?>">
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
                                                                            <div class="form-group col-md-12">
                                                                                <label for="">Order Quantity </label>
                                                                                <input type="text" required name="o_quantity" value="<?php echo $orders->o_quantity; ?>" class="form-control">
                                                                                <input type="hidden" required name="o_id" value="<?php echo $orders->o_id; ?>" class="form-control">
                                                                            </div>
                                                                            <div class="form-group col-md-12">
                                                                                <label for="">Order Details</label>
                                                                                <textarea rows="3" type="text" required name="o_details" class="form-control"><?php echo $orders->o_details; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <button type="submit" name="update_order" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->

                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="delete-<?php echo $orders->o_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">CONFIRM</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center text-danger">
                                                                <h4>Delete <?php echo $orders->cus_name; ?> Order ?</h4>
                                                                <br>
                                                                <p>Heads Up, You are about to delete <?php echo $orders->cus_name; ?> Order. This action is irrevisble.</p>
                                                                <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                                <a href="customer_orders?delete=<?php echo $orders->o_id; ?>" class="text-center btn btn-danger"> Delete </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->
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