<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Transaksi</title>
</head>
<body>
    <h2>Data Transaksi</h2>
    <a href="tambah_transaksi_0093.php" style="padding: 0.4% 0.8%; background-color: #009900; color: #fff: border-radius: 2px; text-decoration: none;">Tambah Data</a><br><br>
    <table border="1" cellspacing="0" width="50%">
        <tr style="text-align: center; font-weight: bold; background-color: #00ffff;">
            <td>No</td>
            <td>Kd Transaksi</td>
            <td>Kd Karyawan</td>
            <td>Kd Barang</td>
            <td>Tanggal</td>
            <td>Nama Barang</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>Total</td>
            <td>Opsi</td>
        </tr>
        <?php
            include 'koneksi_0093.php';
            $no = 1;
            $select = mysqli_query($con, "SELECT * FROM transaksi_0093");
            if(mysqli_num_rows($select) > 0){
                while($hasil = mysqli_fetch_array($select)){
                ?>
                <tr style="text-align: center; ">
                    <td><?php echo $no++?></td>
                    <td><?php echo $hasil['kd_transaksi']?></td>
                    <td><?php echo $hasil['kd_karyawan']?></td>
                    <td><?php echo $hasil['kd_barang']?></td>
                    <td><?php echo $hasil['tanggal']?></td>
                    <td><?php echo $hasil['nama']?></td>
                    <td><?php echo $hasil['harga']?></td>
                    <td><?php echo $hasil['jumlah']?></td>
                    <td><?php echo $hasil['total']?></td>
                    <td>
                        <a href="edit_transaksi_0093.php?kd_transaksi=<?php echo $hasil['kd_transaksi']?>">Edit</a> ||
                        <a href="hapus_transaksi_0093.php?kd_transaksi=<?php echo $hasil['kd_transaksi']?>">Hapus</a>
                    </td>
                </tr>
                <?php }}else{?>
                    <tr>
                        <td colspan="7" align="center">Data Kosong</td>
                    </tr>    
                <?php } ?>
    </table>
    <br>
        <a href="cetak_transaksi_pdf_0093.php" target="_blank"><Button>Cetak PDF</Button></a> ||
        <a href="cetak_transaksi_excel_0093.php" target="_blank"><button>Cetak Excel</button></a> ||
        <button onClick="window.print();">Print</button>
</body>
</html>