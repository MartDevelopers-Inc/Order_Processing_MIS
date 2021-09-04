<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
        <span class="brand-text font-weight-light">Job Portal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php
                if ($_SESSION['Login_rank'] == 'Administrator') {
                ?>
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
                                Company Categories
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="companies" class="nav-link">
                            <i class="nav-icon fas fa-dice"></i>
                            <p>
                                Companies
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="jobs" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                Jobs
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="students" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Students
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="job_applications" class="nav-link">
                            <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                                Job Applications
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="shortlisted_applicants" class="nav-link">
                            <i class="nav-icon fas fa-user-check"></i>
                            <p>
                                ShortListed Applicants
                            </p>
                        </a>
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
                                    <p>Companies</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="reports_jobs" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Posted Jobs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="reports_students" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Students</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="reports_applications" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Applications</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="reports_shortlisted" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Shortlisted</p>
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
                <?php
                } elseif ($_SESSION['Login_rank'] == 'Company') {
                ?>
                    <li class="nav-item">
                        <a href="company_home" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="company_profile" class="nav-link">
                            <i class="nav-icon fas fa-user-tag"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="company_jobs" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                Jobs
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="company_job_applications" class="nav-link">
                            <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                                Job Applications
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="company_shortlisted_applicants" class="nav-link">
                            <i class="nav-icon fas fa-user-check"></i>
                            <p>
                                ShortListed Applicants
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Reports
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">3</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="company_reports_jobs" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Posted Jobs</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="company_reports_applications" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Applications</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="company_reports_shortlisted" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Shortlisted</p>
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

                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a href="std_home" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="std_profile" class="nav-link">
                            <i class="nav-icon fas fa-user-tag"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="std_jobs" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                Jobs
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="std_job_applications" class="nav-link">
                            <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                                My Job Applications
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="std_shortlisted_applicants" class="nav-link">
                            <i class="nav-icon fas fa-user-check"></i>
                            <p>
                                ShortListed Jobs
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                My Reports
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="std_reports_applications" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Applications</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="std_reports_shortlisted" class="nav-link">
                                    <i class="fas fa-angle-right nav-icon"></i>
                                    <p>Shortlisted</p>
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
                <?php
                } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>