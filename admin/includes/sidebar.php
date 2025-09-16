            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

       <a class="nav-link" href="manage-posts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Manage Posts
                            </a>

                             <a class="nav-link" href="manage-users.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Manage Users
                            </a>

                            





                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['login'];?>
                    </div>
                </nav>
            </div>