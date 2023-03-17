<?php require_once('_koneksi.php');
    if (isset($_POST['simpan'])){
        $id_siswa = $_POST['id_siswa'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tahun_masuk= $_POST['tahun_masuk'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $password = md5($_POST['password']);
        $query = "INSERT INTO siswa VALUES('','$nis','$nama','$jenis_kelamin','$tahun_masuk','$kelas','$alamat','$tanggal_lahir','$tempat_lahir','$password')";
        mysqli_query($conn,$query);     //query input tabel siswa
        header("Location:_input.php");  //mengarahkan halaman setelah selesai input
    }

    if (isset($_POST['update_siswa'])){
        $id_siswa = $_POST['id_siswa'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tahun_masuk= $_POST['tahun_masuk'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $query = "UPDATE siswa SET
            nis ='$nis',
            nama ='$nama',
            jenis_kelamin ='$jenis_kelamin',
            tahun_masuk ='$tahun_masuk',
            kelas ='$kelas',
            alamat ='$alamat',
            tanggal_lahir ='$tanggal_lahir',
            tempat_lahir ='$tempat_lahir'
        WHERE id_siswa ='$id_siswa' ";
        mysqli_query($conn,$query);         //query input tabel siswa
        header("Location:_table.php");      //mengarahkan halaman setelah selesai input
    }

    if(isset($_GET['hapus'])){
        $id_siswa = $_GET['hapus'];
        $query="DELETE from siswa where id_siswa =$id_siswa";
        mysqli_query($conn,$query);
        header("Location:_table.php"); 
    }
    if(isset($_POST['login']))
    {
        $nis =$_POST['nis'];
        $password = md5($_POST['password']);
        $query ="SELECT * FROM siswa where nis ='$nis'";        //mencari siswa bedasarkan nis
        $hasil = mysqli_query($conn,$query);
        $siswa = mysqli_fetch_array($hasil);
        if ($password==$siswa['password']){     //menegecek apakah passwordnya yg di input sama dengan password pd database
            session_start();
            $_SESSION['nis']=$siswa['nis'];
            $_SESSION['nama']=$siswa['nama'];
            $_SESSION['jenis_kelamin']=$siswa['jenis_kelamin'];
            $_SESSION['kelas']=$siswa['kelas'];
            $_SESSION['alamat']=$siswa['alamat'];
            $_SESSION['tanggal_lahir']=$siswa['tanagal_lahir'];
            $_SESSION['tempat_lahir']=$siswa['tempat_lahir'];
            header("Location:_index.php");
        }else{
            header("Location:_login.php");
        }
    }
    
?>