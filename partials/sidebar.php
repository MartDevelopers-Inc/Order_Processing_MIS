<?php
/*
 * Created on Sun Sep 05 2021
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


/* Load System Settings */
$ret = "SELECT * FROM `settings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="home" class="brand-link">
            <span class="brand-text font-weight-light">iOrder MIS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a href="home" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="profile" class="nav-link">
                            <i class="nav-icon fas fa-user-tag"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="company_categories" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-list"></i>
                            <p>
                                Product Categories
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="companies" class="nav-link">
                            <i class="nav-icon fas fa-dice"></i>
                            <p>
                                Products
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="jobs" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                Suppliers
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="jobs" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                Shipping Agents
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="students" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Customers
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="job_applications" class="nav-link">
                            <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                                Orders
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Settings
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">5</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="reports_companies" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>STMP Mailer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="reports_jobs" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>System Settings</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Reports
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">5</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="reports_companies" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Inventory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="reports_jobs" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Suppliers</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="reports_students" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Customers</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="reports_applications" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Shipping Agents</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="reports_shortlisted" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Orders</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="logout" class="nav-link">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                Log Out
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
<?php
} ?>