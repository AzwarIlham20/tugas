<?php
    include 'koneksi_0093.php';
        if(isset($_GET['kd_karyawan'])) {
            $delete = mysqli_query($con, "DELETE FROM karyawan_0093 WHERE kd_karyawan = '".$_GET['kd_karyawan']."' ");
            header('location:karyawan_0093.php');
        }
?>