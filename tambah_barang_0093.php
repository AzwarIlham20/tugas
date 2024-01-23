<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Input Barang</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Input Data Barang</h2>
    <a href="barang_0093.php" style="padding: 0.4% 0.8%; background-color: #009900; color: #fff: border-radius: 2px; text-decoration: none;">Data Barang</a><br><br>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kd_barang" placeholder="Kode Barang" required></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Nama Barang" required></td>
            </tr>
            <tr>
                <td>Merk</td>
                <td>:</td>
                <td><input type="text" name="merk" placeholder="Merk" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stok" placeholder="Stok" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" placeholder="Harga" required></td>
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
        $insert = mysqli_query($con, "INSERT INTO barang_0093 VALUES
                               ('".$_POST['kd_barang']."',
                                '".$_POST['nama']."',
                                '".$_POST['merk']."',
                                '".$_POST['stok']."',
                                '".$_POST['harga']."')");
        if($insert){
            echo "Berhasil Disimpan";
        }else{
            echo "Gagal Simpan".mysqli_error($con);
        }
    }
        ?>
</body>
</html>