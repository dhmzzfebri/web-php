<?php
    $hal="table";
    require_once('_koneksi.php');
    $query = "SELECT * FROM siswa order by nama ASC";
    $datasiswa= mysqli_query($conn,$query);
?>

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
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Data Siswa</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">no</th>
                            <th scope="col">Nis</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tahun Masuk</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($datasiswa as $siswa) {?>
                            <tr>
                            <th scope="row"><?=$no; ?></th>
                            <td><?=$siswa['nis']?></td>
                            <td><?=$siswa['nama']?></td>
                            <td><?=$siswa['jenis_kelamin']?></td>
                            <td><?=$siswa['tahun_masuk']?></td>
                            <td><?=$siswa['kelas']?></td>
                            <td><?=$siswa['alamat']?></td>
                            <td><?=$siswa['tanggal_lahir']?></td>
                            <td><?=$siswa['tempat_lahir']?></td>
                            <td>
                                <a class="btn btn-danger"
                                onclick="return confirm('anda yakin mau menghapus ini?')"
                                href="crud.php?hapus=<?=$siswa['id_siswa']?>">Hapus</a>
                                <a class="btn btn-warning"
                                onclick="return confirm('anda yakin ingin mengedit ini?')"
                                href="_edit.php?id_siswa=<?=$siswa['id_siswa']?>">Edit</a>
                                
                            </td>
                            </tr>
                            <?php $no++;} ?>
                        </tbody>
                    </table>
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


