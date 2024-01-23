<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Barang</title>
</head>
<body>
    <h2>Data Barang</h2>
    <a href="tambah_barang_0093.php" style="padding: 0.4% 0.8%; background-color: #009900; color: #fff: border-radius: 2px; text-decoration: none;">Tambah Data</a><br><br>
    <table border="1" cellspacing="0" width="50%">
        <tr style="text-align: center; font-weight: bold; background-color: #00ffff;">
            <td>No</td>
            <td>Kd Barang</td>
            <td>Nama Barang</td>
            <td>Merk</td>
            <td>Stok</td>
            <td>Harga</td>
            <td>Opsi</td>
        </tr>
        <?php
            include 'koneksi_0093.php';
            $no = 1;
            $select = mysqli_query($con, "SELECT * FROM barang_0093");
            if(mysqli_num_rows($select) > 0){
                while($hasil = mysqli_fetch_array($select)){
                ?>
                <tr style="text-align: center; ">
                    <td><?php echo $no++?></td>
                    <td><?php echo $hasil['kd_barang']?></td>
                    <td><?php echo $hasil['nama']?></td>
                    <td><?php echo $hasil['merk']?></td>
                    <td><?php echo $hasil['stok']?></td>
                    <td><?php echo $hasil['harga']?></td>
                    <td>
                        <a href="edit_barang_0093.php?kd_barang=<?php echo $hasil['kd_barang']?>">Edit</a> ||
                        <a href="hapus_barang_0093.php?kd_barang=<?php echo $hasil['kd_barang']?>">Hapus</a>
                    </td>
                </tr>
                <?php }}else{?>
                    <tr>
                        <td colspan="7" align="center">Data Kosong</td>
                    </tr>    
                <?php } ?>
    </table>
    <br>
        <a href="cetak_barang_pdf_0093.php" target="_blank"><Button>Cetak PDF</Button></a> ||
        <a href="cetak_barang_excel_0093.php" target="_blank"><button>Cetak Excel</button></a> ||
        <button onClick="window.print();">Print</button>
</body>
</html>