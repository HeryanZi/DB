<?php
include 'koneksi.php';
    $NomorP = $_POST['NomorP'];
    $NamaP = $_POST['NamaP'];
    $JKelamin = $_POST['JKelamin'];
    $UmurP = $_POST['UmurP'];
    $RuanganP = $_POST['RuanganP'];
    $DokterP = $_POST['DokterP'];

    $update = "UPDATE pasien SET NamaP='$NamaP', JKelamin='$JKelamin', UmurP='$UmurP',RuanganP='$RuanganP',DokterP='$DokterP' where NomorP='$NomorP'";
    $update_query = mysqli_query($koneksi, $update);
    if($update_query ){
        header('location:index.php');

    } else{
        echo "Gagal Menambahkan DATA";
    }
