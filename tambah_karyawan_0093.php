<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Input Karyawan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Input Data Karyawan</h2>
    <a href="karyawan_0093.php" style="padding: 0.4% 0.8%; background-color: #009900; color: #fff: border-radius: 2px; text-decoration: none;">Data Karyawan</a><br><br>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td>Kode Karyawan</td>
                <td>:</td>
                <td><input type="text" name="kd_karyawan" placeholder="Kode Karyawan" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" placeholder="Alamat" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tmp_lahir" placeholder="Tempat Lahir" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jk">
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </td>
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
        $insert = mysqli_query($con, "INSERT INTO karyawan_0093 VALUES
                               ('".$_POST['kd_karyawan']."',
                                '".$_POST['nama']."',
                                '".$_POST['alamat']."',
                                '".$_POST['tmp_lahir']."',
                                '".$_POST['tgl_lahir']."',
                                '".$_POST['jk']."')");
        if($insert){
            echo "Berhasil Disimpan";
        }else{
            echo "Gagal Simpan".mysqli_error($con);
        }
    }
        ?>
</body>
</html>