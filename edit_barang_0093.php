<?php
    include 'koneksi_0093.php';
    $data_edit = mysqli_query($con, "SELECT * FROM barang_0093 WHERE kd_barang = '".$_GET['kd_barang']."'");
    $hasil = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Edit Barang</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Data Barang</h2>
    <a href="barang_0093.php" style="padding: 0.4% 0.8%; background-color: #009900; color: #fff: border-radius: 2px; text-decoration: none;">Data Barang</a><br><br>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kd_barang" value="<?php echo $hasil['kd_barang']?>" required></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $hasil['nama']?>" required></td>
            </tr>
            <tr>
                <td>Merk</td>
                <td>:</td>
                <td><input type="text" name="merk" value="<?php echo $hasil['merk']?>" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stok" value="<?php echo $hasil['stok']?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" value="<?php echo $hasil['harga']?>" required></td>
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
            $update = mysqli_query($con, "UPDATE barang_0093 SET nama = '".$_POST['nama']."', 
                    merk = '".$_POST['merk']."', stok = '".$_POST['stok']."', harga = '".$_POST['harga']."' 
                    WHERE kd_barang = '".$_GET['kd_barang']."'");                       
            if($update){
                echo 'Berhasil Diedit';
            }else{
                echo 'Gagal Edit';
            }
        }
    ?>
</body>
</html>