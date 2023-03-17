<?php
    require_once("_cek.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RB inputan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php
    require_once("_css.php")
    ?>
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sidebar Start -->
        <?php
                require_once("_sidebar.php")
        ?>
        <!-- Sidebar End -->
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            require_once("_navbar.php")
            ?>
            <!-- Navbar End -->
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="bg-light rounded h-100 p-4">
                    <div class="bg-light rounded h-100 p-4">
                        <h4 class="mb-4">Ubah Password</h4>
                        <form action="crud.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password lama</label>
                                <input type="password" class="form-control" name="password_lama" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" name="password_baru">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" name="konf_password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="ganti">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
            <!-- Footer Start -->
            <?php
                require_once("_footer.php")
            ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- JavaScript Libraries -->
    <?php
        require_once("_js.php");  
    ?>
</body>

</html>