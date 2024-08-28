<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="admin_assets/img/profile_small.jpg" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold"><?php if (isset($_SESSION['email'])) {
                                                                    // Display session status safely
                                                                    echo htmlspecialchars($_SESSION['email']);
                                                                } else {
                                                                }
                                                                ?></span>
                        <span class="text-muted text-xs block">Users Admin <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.php">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.php">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="dashboard.php"><i class="fa fa-flask"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="users.php"><i class="fa fa-user"></i> <span class="nav-label">Manage Users</span></a>
            </li>
            <li>
                <a href="products.php"><i class="fa fa-flask"></i><span class="nav-label">Products</span></a>
            </li>
            <li>
                <a href="catagories.php"><i class="fa fa-list"></i> <span class="nav-label"> Catagories</span></a>
            </li>
            <li>
                <a href="orders.php"><i class="fa fa-shopping-cart"></i> <span class="nav-label"> Oders</span></a>
            </li>
        </ul>
    </div>
</nav>