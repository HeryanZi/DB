<?php
$koneksi = mysqli_connect("localhost","root","","DB_Pasien");

if (mysqli_connect_errno()){
    echo "Koneksi Gagal";
} else {
        echo "Terhubung ke Database ";
        echo "<br/>";
    }

?>