<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>DASHMIN </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <?php
      require_once("_css.php");
    ?>
  </head>
  <body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sidebar Start -->
        <?php require_once("_sidebar.php"); ?>
        <!-- Content Start -->
        <div class="content">
          <!-- Navbar Start -->
          <?php require_once("_navbar.php");  ?>
          <!-- Blank Start -->
          <div class="container-fluid pt-4 px-4">
              <div class="col-md-6 text-left">
                <h2>Dashboard</h2>
              </div>
          </div>
          <!-- Footer Start -->
          <?php require_once("_footer.php");?>
        </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php require_once("_js.php");?>
  </body>
</html>
