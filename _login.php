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
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>SkandaBois</h3>
                            </a>
                        </div>
                        <form action="crud.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nis">
                                <label>Masukan NIS</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" name="password">
                                <label>Password</label>
                            </div>
                            
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="login">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Libraries -->
    <?php
        require_once("_js.php");  
    ?>
</body>

</html>