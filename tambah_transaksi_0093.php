<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Input Transaksi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Input Data Transaksi</h2>
    <a href="transaksi_0093.php" style="padding: 0.4% 0.8%; background-color: #009900; color: #fff: border-radius: 2px; text-decoration: none;">Data Transaksi</a><br><br>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td>Kode Transaksi</td>
                <td>:</td>
                <td><input type="text" name="kd_transaksi" placeholder="Kode Transaksi" required></td>
            </tr>
            <tr>
                <td>Kode Karyawan</td>
                <td>:</td>
                <td><input type="text" name="kd_karyawan" placeholder="Kode Karyawan" required></td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kd_barang" placeholder="Kode Barang" required></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal" placeholder="Tanggal" required></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Nama Barang" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" placeholder="Harga" required></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" placeholder="Jumlah" required></td>
            </tr>
            <tr>
                <td>Total</td>
                <td>:</td>
                <td><input type="text" name="total" placeholder="Total" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    include 'koneksi_0093.php';
    if(isset($_POST['simpan'])) {
        $insert = mysqli_query($con, "INSERT INTO transaksi_0093 VALUES
                               ('".$_POST['kd_transaksi']."',
                                '".$_POST['kd_karyawan']."',
                                '".$_POST['kd_barang']."',
                                '".$_POST['tanggal']."',
                                '".$_POST['nama']."',
                                '".$_POST['harga']."',
                                '".$_POST['jumlah']."',
                                '".$_POST['total']."')");
        if($insert){
            echo "Berhasil Disimpan";
        }else{
            echo "Gagal Simpan".mysqli_error($con);
        }
    }
        ?>
</body>
</html>