<?php
    include 'koneksi_0093.php';
    $data_edit = mysqli_query($con, "SELECT * FROM karyawan_0093 WHERE kd_karyawan = '".$_GET['kd_karyawan']."'");
    $hasil = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Edit Data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Data Karyawan</h2>
    <a href="karyawan_0093.php" style="padding: 0.4% 0.8%; background-color: #009900; color: #fff: border-radius: 2px; text-decoration: none;">Data Karyawan</a><br><br>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td>Kode Karyawan</td>
                <td>:</td>
                <td><input type="text" name="kd_karyawan" value="<?php echo $hasil['kd_karyawan']?>" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $hasil['nama']?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $hasil['alamat']?>" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tmp_lahir" value="<?php echo $hasil['tmp_lahir']?>" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir" value="<?php echo $hasil['tgl_lahir']?>" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jk">
                        <option value="<?php echo $hasil['jk'] ?>"></option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </td>
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
            $update = mysqli_query($con, "UPDATE karyawan_0093 SET nama = '".$_POST['nama']."', 
                    alamat = '".$_POST['alamat']."', tmp_lahir = '".$_POST['tmp_lahir']."', tgl_lahir = '".$_POST['tgl_lahir']."', 
                    jk = '".$_POST['jk']."' 
                    WHERE kd_karyawan = '".$_GET['kd_karyawan']."'");                       
            if($update){
                echo 'Berhasil Diedit';
            }else{
                echo 'Gagal Edit';
            }
        }
    ?>
</body>
</html>