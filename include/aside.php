        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <!-- <a href="dashboard.php" class="brand-link">
                <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Dashboard</span>
            </a> -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                        <img src="assets/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                         <span style="color:white">Dashboard</span>
                        <a href="dashboard.php" class="d-block"><?= $user['firstname'] . ' ' . $user['lastname'];  ?></a>
                        <a href="dashboard.php" class="d-block"><?= $user['email'];  ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "dashboard.php") ? "active" : ""; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <?php if ($user['type'] == 1) : ?>
                            <li class="nav-item">
                                <a href="branch.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "branch.php") ? "active" : ""; ?>">
                                    <i class="nav-icon fa fa-building"></i>
                                    <p>Branch List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="staff.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "staff.php") ? "active" : ""; ?>">
                                    <i class="nav-icon fa fa-users"></i>
                                    <p>Branch Staff</p>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a href="parcels.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "parcels.php") ? "active" : ""; ?>">
                                <i class="nav-icon fa fa-sitemap"></i>
                                <p>Parcels</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="track_parcel.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "track_parcel.php") ? "active" : ""; ?>">
                                <i class="nav-icon fa fa-search"></i>
                                <p>Track Parcels</p>
                            </a>
                        </li>
                        <?php if ($user['type'] == 1) : ?>
                        <li class="nav-item">
                            <a href="system_Setting.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "system_Setting.php") ? "active" : ""; ?>">
                                <i class="nav-icon fa fa-cog"></i>
                                <p>System Setting</p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="logout">
                                <i class="nav-icon fa fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>