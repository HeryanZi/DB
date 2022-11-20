<html>

<head>
</head>

<body>
    <?php
    $NomorP = $_POST['NomorP'];
    $NamaP = $_POST['NamaP'];
    $JKelamin = $_POST['JKelamin'];
    $UmurP = $_POST['UmurP'];
    $RuanganP = $_POST['RuanganP'];
    $DokterP = $_POST['DokterP'];
    if ($NomorP == "" or $NamaP == "" or $JKelamin == "" or $UmurP == "" or $RuanganP == "" or $DokterP == "") {
        echo "Data Kurang Lengkap Mohon Periksa Kembali";
        echo '<html><body><a href="form_input_pasien.php"> Kembali Ke Form Input</a></body></html>';
    } else {
        include 'koneksi.php';
        
        $insert = "INSERT INTO pasien(NomorP, NamaP, JKelamin, UmurP, RuanganP, DokterP)
Values('$NomorP', '$NamaP', '$JKelamin', '$UmurP', '$RuanganP', '$DokterP')";
        $insert_query = mysqli_query($koneksi, $insert);
        if ($insert_query) {
            echo "Data sudah berhasil disimpan";
            echo '<html><body><a href="index.php">--->Cek Hasil Tambah Data</a></body></html>';
        } else {
            echo "Data dengan Nomor pelanggan yang sama Sudah ada...!";
            echo '<html><body><a href="form_input_pasien.php">---> Input Ulang</a></body></html>';
        }
    }

    ?>

</body>

</html>