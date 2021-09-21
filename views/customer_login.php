<?php
/*
 * Created on Sat Sep 04 2021
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
require_once('../config/codeGen.php');

/* Login */
if (isset($_POST['Login'])) {
    $cus_email = $_POST['cus_email'];
    $cus_password = sha1(md5($_POST['cus_password']));

    $stmt = $mysqli->prepare("SELECT cus_email, cus_password, cus_id  FROM customer  WHERE cus_email =? AND cus_password =? ");
    $stmt->bind_param('ss', $cus_email, $cus_password);
    $stmt->execute(); //execute bind

    $stmt->bind_result($cus_email, $cus_password, $cus_id);
    $rs = $stmt->fetch();
    $_SESSION['cus_id'] = $cus_id;

    if ($rs) {
        header("location:customer_dashboard");
    } else {
        $err = "Login Failed, Please Check Your Credentials";
    }
}

require_once('../partials/head.php');
?>

<body class="hold-transition login-page">
    <div class="login-box">

        <?php require_once('../partials/auth.php'); ?>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your customer session</p>

                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="cus_email" required class="form-control" placeholder="Email ">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user-tag"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="cus_password" required class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <button type="submit" name="Login" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
                <p class="mb-1">
                    <a href="customer_forget_password">I Forgot My Password</a>
                </p>
            </div>
        </div>
    </div>
    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>