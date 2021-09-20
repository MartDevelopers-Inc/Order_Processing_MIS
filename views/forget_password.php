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

/* Reset Password */
if (isset($_POST['Reset_Password'])) {
    //prevent posting blank value for email
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    } else {
        $error = 1;
        $err = "Enter your E-mail";
    }
    $query = mysqli_query($mysqli, "SELECT * from `admin` WHERE admin_email='" . $email . "'");
    $num_rows = mysqli_num_rows($query);

    if ($num_rows > 0) {
        $password = $sys_gen_password; /* Find This @config/codeGen.php */
        /* Mail User Plain Password */
        $new_password = $password;
        /* Hash Password  */
        $hashed_password = sha1(md5($new_password));
        $query = "UPDATE admin SET  admin_password=? WHERE  admin_email =?";
        $stmt = $mysqli->prepare($query);
        //bind paramaters
        $rc = $stmt->bind_param('ss', $hashed_password, $email);
        $stmt->execute();
        /* Load Mailer */
        require_once('../config/password_reset_mailer.php');
        if ($stmt && $mail->send()) {
            $success = "Password Reset Instructions Sent To Your Mail";
        } else {
            $err = "Password Reset Failed!, Try again $mail->ErrorInfo";
        }
    }
    /* User Does Not Exist */ else {
        $err = "Sorry, User Account With That Email Does Not Exist";
    }
}
require_once('../partials/head.php');
?>

<body class="hold-transition login-page">
    <div class="login-box">
        <?php require_once('../partials/auth.php'); ?>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Enter email to reset password</p>

                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user-tag"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                        </div>
                        <div class="col-6">
                            <button type="submit" name="Reset_Password" class="btn btn-primary btn-block">Reset Password</button>
                        </div>
                    </div>
                </form>

                <p class="mb-1">
                    <a href="../">I remembered my password</a>
                </p>

            </div>
        </div>
    </div>
    <?php require_once('../partials/scripts.php'); ?>

</body>

</html>