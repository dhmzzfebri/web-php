<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
    <a href="dashmin-1.0.0/index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa "></i></h2></a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="dashmin-1.0.0/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    </div>
                </a>
            </div>
        </div>
        
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="dashmin-1.0.0/img/saya.jpg" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex"><?= $_SESSION['nama'];?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="_profil.php" class="dropdown-item">My Profile</a>
                <a href="_ubahpw.php" class="dropdown-item">Password</a>
                <a href="_logout.php" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </div>
</nav>