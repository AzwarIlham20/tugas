<?php
    include 'koneksi_0093.php';
        if(isset($_GET['kd_barang'])) {
            $delete = mysqli_query($con, "DELETE FROM barang_0093 WHERE kd_barang = '".$_GET['kd_barang']."' ");
            header('location:barang_0093.php');
        }
?>