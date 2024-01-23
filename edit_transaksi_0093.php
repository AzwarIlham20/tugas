<?php
    include 'koneksi_0093.php';
    $data_edit = mysqli_query($con, "SELECT * FROM transaksi_0093 WHERE kd_transaksi = '".$_GET['kd_transaksi']."'");
    $hasil = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Edit Transaksi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Data Transaksi</h2>
    <a href="transaksi_0093.php" style="padding: 0.4% 0.8%; background-color: #009900; color: #fff: border-radius: 2px; text-decoration: none;">Data Transaksi</a><br><br>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td>Kode Transaksi</td>
                <td>:</td>
                <td><input type="text" name="kd_transaksi" value="<?php echo $hasil['kd_transaksi']?>" required></td>
            </tr>
            <tr>
                <td>Kode Karyawan</td>
                <td>:</td>
                <td><input type="text" name="kd_karyawan" value="<?php echo $hasil['kd_karyawan']?>" required></td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kd_barang" value="<?php echo $hasil['kd_barang']?>" required></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal" value="<?php echo $hasil['tanggal']?>" required></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $hasil['nama']?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" value="<?php echo $hasil['harga']?>" required></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" value="<?php echo $hasil['jumlah']?>" required></td>
            </tr>
            <tr>
                <td>Total</td>
                <td>:</td>
                <td><input type="text" name="total" value="<?php echo $hasil['total']?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" value="simpan"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['edit'])) {
            $update = mysqli_query($con, "UPDATE transaksi_0093 SET kd_karyawan = '".$_POST['kd_karyawan']."', 
                    kd_barang = '".$_POST['kd_barang']."', tanggal = '".$_POST['tanggal']."', nama = '".$_POST['nama']."', 
                    harga = '".$_POST['harga']."', jumlah = '".$_POST['jumlah']."', total = '".$_POST['total']."'
                    WHERE kd_transaksi = '".$_GET['kd_transaksi']."'");                       
            if($update){
                echo 'Berhasil Diedit';
            }else{
                echo 'Gagal Edit';
            }
        }
    ?>
</body>
</html>