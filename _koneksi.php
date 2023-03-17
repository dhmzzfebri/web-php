<?php
    $namahost = "localhost";
    $user = "root";
    $password = "";
    $database = "sekolah";  //nama data basenya
    $conn = mysqli_connect($namahost,$user,$password,$database);
    if(!$conn){
        echo "data base tidak terhubung";

    }
?>