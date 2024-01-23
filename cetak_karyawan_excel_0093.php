<?php
    header("Content-type:application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename= Data Karyawan.xls");
?>
<h2>PT. MAJU SUKSES MANDIRI</h2>
<h3>Alamat : Jl. Pelabuhan Laut No. 5 Banjarmasin Selatan</h3>
<h5>Telp : (0511)335213, HP : 085345775699</h5><br><br>
<h3>Data Karyawan</h3>
<table border="1">
    <tr style="text-align: center; font-weight: bold; background-color: #00ffff;">
    <td>No</td>
    <td>Id_Karyawan</td>
    <td>Nama</td>
    <td>Alamat</td>
    <td>Tempat Lahir</td>
    <td>Tanggal Lahir</td>
    <td>Jenis Kelamin</td>
    <td>Opsi</td>  
    </tr>
    <?php
    include 'koneksi_0093.php';

    $no = 1;
    $select = mysqli_query($con,"SELECT * FROM karyawan_0093");
    if(mysqli_num_rows($select) > 0)
    while($hasil = mysqli_fetch_array($select)){
    ?>
    <tr style="text-align:center">
        <td><?php echo $no++ ?></td>
        <td><?php echo $hasil['kd_karyawan'] ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['alamat'] ?></td>
        <td><?php echo $hasil['tmp_lahir'] ?></td>
        <td><?php echo $hasil['tgl_lahir'] ?></td>
        <td><?php echo $hasil['jk'] ?></td>
    </tr>
    <?php }else{?>
    <tr>
        <td colspan="7" align="center">Data Kosong</td>
    </tr>
    <?php } ?>    
</table>