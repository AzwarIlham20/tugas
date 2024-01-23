<?php
    include 'koneksi_0093.php';
        if(isset($_GET['kd_transaksi'])) {
            $delete = mysqli_query($con, "DELETE FROM transaksi_0093 WHERE kd_transaksi = '".$_GET['kd_transaksi']."' ");
            header('location:transaksi_0093.php');
        }
?>