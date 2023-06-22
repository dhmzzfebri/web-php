<?php
    require_once('_koneksi.php');
    session_start();
    $id_siswa = $_SESSION['nis'];
    $query = "SELECT*FROM siswa where nis";
    $datasiswa1 = mysqli_query($conn,$query);

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
            // require_once("_navbar.php")
            ?>
            <!-- Navbar End -->
            <!-- Blank Start -->
            <div class="container-fluid pt-2 px-2">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="bg-light rounded h-100 p-4">
                        <h4 class="mb-4">My profil</h4>
                        
                        <form action="crud.php" method="POST">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" value="<?= $_SESSION['nis']; ?>" name="nis" >
                                    <input type="hidden" value="<?=$siswa['id_siswa']; ?>" name="id_siswa">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" value="<?= $_SESSION['nama'];?>"  name="nama">
                                </div>
                            </div>
                            
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis kelamin" value="Laki-laki" <?php if($_SESSION['jenis_kelamin']=="Laki-laki"){echo "checked"; } ?> >
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis kelamin"  value="Perempuan" <?php if($_SESSION['jenis_kelamin']=="Perempuan"){echo "checked"; } ?> >
                                        <label class="form-check-label" for="gridRadios2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tahun masuk</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" value="<?= $_SESSION['tahun_masuk'];?>" name="tahun_masuk" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-8">
                                    <select name="kelas">
                                        <option value="11 RA"
                                        <?php if($_SESSION['kelas']=="11 RA"){echo "selected"; } ?> >XI RA</option>
                                        <option value="11 RB" 
                                        <?php if($_SESSION['kelas']=="11 RB"){echo "selected"; } ?> >XI RB</option>
                                        <option value="11 RC"
                                        <?php if($_SESSION['kelas']=="11 RC"){echo "selected"; } ?> >XI RC</option>    
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" value="<?=$_SESSION['alamat'];?>" name="alamat" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="inputPassword3" value="<?=$_SESSION['tanggal_lahir'];?>" name="tanggal lahir" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" value="<?= $_SESSION['tempat_lahir'];?>" name="tempat lahir" >
                                </div>
                            </div>
                        
                            <button type="submit" class="btn btn-primary" onclick="return confirm('simpan data sukses')" name="update_siswa">Simpan</button>
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