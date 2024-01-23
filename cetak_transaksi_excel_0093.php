<?php
    header("Content-type:application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename= Data Transaksi.xls");
?>
<h2>PT. MAJU SUKSES MANDIRI</h2>
<h3>Alamat : Jl. Pelabuhan Laut No. 5 Banjarmasin Selatan</h3>
<h5>Telp : (0511)335213, HP : 085345775699</h5><br><br>
<h3>Data Transaksi</h3>
<table border="1">
    <tr style="text-align: center; font-weight: bold; background-color: #00ffff;">
    <td>No</td>
    <td>Kd Transaksi</td>
    <td>Kd karyawan</td>
    <td>Kd Barang</td>
    <td>Tanggal</td>
    <td>Nama</td>
    <td>Harga</td>
    <td>Jumlah</td>
    <td>Total</td>  
    </tr>
    <?php
    include 'koneksi_0093.php';

    $no = 1;
    $select = mysqli_query($con,"SELECT * FROM transaksi_0093");
    if(mysqli_num_rows($select) > 0)
    while($hasil = mysqli_fetch_array($select)){
    ?>
    <tr style="text-align:center">
        <td><?php echo $no++ ?></td>
        <td><?php echo $hasil['kd_transaksi'] ?></td>
        <td><?php echo $hasil['kd_karyawan'] ?></td>
        <td><?php echo $hasil['kd_barang'] ?></td>
        <td><?php echo $hasil['tanggal'] ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['harga'] ?></td>
        <td><?php echo $hasil['jumlah'] ?></td>
        <td><?php echo $hasil['total'] ?></td>
    </tr>
    <?php }else{?>
    <tr>
        <td colspan="7" align="center">Data Kosong</td>
    </tr>
    <?php } ?>    
</table>