<?php
    $con = mysqli_connect("localhost", "root", "", "web2");
    if($con){
        echo "BERHASIL TERHUBUNG KE DATABASE";
    }else{
        echo "GAGAL TERHUBUNG KE DATABASE";
    }
    ?>