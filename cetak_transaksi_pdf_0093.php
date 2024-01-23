<?php
    include 'fpdf.php';
    include 'koneksi_0093.php';

    $pdf =new FPDF('P','mm','A4');
    $pdf ->AddPage();

    $pdf ->SetFont('Arial','667',16);
    $pdf ->Cell(0,5,'PT. MAJU SUKSES MANDIRI','0','1','C',false);
    $pdf ->SetFont('Arial','i',8);
    $pdf ->Cell(0,5,'Alamat  : Jl. Pelambuan Laut No. 5 Banjarmasin Selatan','0','1','C',false);
    $pdf ->SetFont('Arial','i',6);
    $pdf ->Cell(0,5,'Telp  : (0511)335213, HP  : 085345775699','0','1','C',false);
    $pdf ->Ln(3);
    $pdf ->Cell(190,0.6,'','0','1','C',true);
    $pdf ->Ln(5);

    $pdf ->SetFont('Arial','B','9');
    $pdf ->Cell(50,5,'Laporan Data Transaksi','0','1','L',false);
    $pdf ->Ln(3);

    $pdf ->SetFont('Arial','667','7');
    $pdf ->Cell(8,6,'No',1,0,'C');
    $pdf ->Cell(20,6,'Kd Transaksi',1,0,'C');
    $pdf ->Cell(35,6,'Kd Karyawan',1,0,'C');
    $pdf ->Cell(35,6,'kd Barang',1,0,'C');
    $pdf ->Cell(35,6,'Tanggal',1,0,'C');
    $pdf ->Cell(35,6,'Nama',1,0,'C');
    $pdf ->Cell(20,6,'Harga',1,0,'C');
    $pdf ->Cell(20,6,'Jumlah',1,0,'C');
    $pdf ->Cell(20,6,'Total',1,0,'C');
    $pdf ->Ln(2);

    $no=1;
    $sql = mysqli_query($con, "SELECT * FROM transaksi_0093");
    if(mysqli_num_rows($sql) > 0) {
        while($hasil = mysqli_fetch_array($sql)){

        $pdf ->Ln(4);
        $pdf ->SetFont('Arial','',7);
        $pdf ->Cell(8,4,$no++.".",1,0,'C');
        $pdf ->Cell(20,4,$hasil['kd_transaksi'].".",1,0,'L');
        $pdf ->Cell(35,4,$hasil['kd_karyawan'].".",1,0,'L');
        $pdf ->Cell(35,4,$hasil['kd_barang'].".",1,0,'L');
        $pdf ->Cell(35,4,$hasil['tanggal'].".",1,0,'L');
        $pdf ->Cell(35,4,$hasil['nama'].".",1,0,'L');
        $pdf ->Cell(20,4,$hasil['harga'].".",1,0,'L');
        $pdf ->Cell(20,4,$hasil['jumlah'].".",1,0,'L');
        $pdf ->Cell(20,4,$hasil['total'].".",1,0,'L');
        }
    }
    $pdf ->Output('Laporan-Transaksi.pdf','I');
?>