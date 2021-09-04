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


/* Password Reset Email  */

require_once('config.php');

/* Mailer Configurations */
require '../vendor/autoload.php';

/* Initiate Mailer */
$mail = new PHPMailer\PHPMailer\PHPMailer();

/* Load STMP Settings From A Custom Database Table */
$ret = ""; //Custom SQL
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys_mailer = $res->fetch_object()) {

    $mail->setFrom($sys_mailer->mail_from);
    $mail->addAddress($email);
    $mail->FromName = $sys_mailer->mail_from_name;
    $mail->isHTML(true);
    $mail->IsSMTP();
    $mail->SMTPSecure = $sys_mailer->protocol;
    $mail->Host = $sys_mailer->host;
    $mail->SMTPAuth = true;
    $mail->Port = $sys_mailer->port;
    $mail->Username = $sys_mailer->username;
    $mail->Password = $sys_mailer->password;
    $mail->Subject = 'Password Reset';
    /* Custom Mail Body */
    $mail->Body = '
    <!doctype html>
    <html lang="en-US">
    
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>Password Reset</title>
        <meta name="description" content="Reset Password Email">
        <style type="text/css">
            a:hover {text-decoration: underline !important;}
        </style>
    </head>
    
    <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
        <!--100% body table-->
        <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
            style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: "Open Sans", sans-serif;">
            <tr>
                <td>
                    <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                        align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="height:80px;">&nbsp;</td>
                        </tr>
                        <!--<tr>
                            <td style="text-align:center;">
                              <a href="https://jobo.wcf.co.ke" title="logo" target="_blank">
                                <img width="200" src="http://jobo.wcf.co.ke/public/images/resources/background.png" title="logo" alt=" Jobo Logo">
                              </a>
                            </td>
                        </tr> -->
                        <tr>
                            <td style="height:20px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                    style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                    <tr>
                                        <td style="height:40px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:0 35px;">
                                            <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:"Rubik",sans-serif;">Password Reset</h1>
                                            <span
                                                style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                            <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                                Hi there, <br>
                                                You recently requested to reset the password for your account.
                                            </p>
                                            <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                               This is your new password: <br>
                                               <b>' . $new_password . '</b>
                                               <br>
                                               Kindly change it after login.
                                               <br>
                                               <br>
                                               Kind Regards<br>
                                               <b>Devlan Inc</b> <br>
                                               <i>Where Innovation Meets Experience</i>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:40px;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        <tr>
                            <td style="height:20px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">
                                <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; ' . date('Y') . ' <strong> iResturant ERP. A <a href="https://martdev.info/"> MartDevelopers Inc </a> Production</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="height:80px;">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    ';
}
