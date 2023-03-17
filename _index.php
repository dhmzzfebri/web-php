<?php
    $hal="index";
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
            <div class="container-fluid pt-4 px-4 text-center" >
                <h3>hallo selamat datang <?= $_SESSION['nama'];?>😁</h3>
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