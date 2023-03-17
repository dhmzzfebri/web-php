<?php
    session_start();
    if(!isset($_SESSION ['nis'])){
        header("Location:_login.php");
    }
?>