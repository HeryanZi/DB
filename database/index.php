<html>

<head>
    <title>
        Menampilkan Data Pasien Dari Databese
    </title>
</head>

<body>
    <center>
        <h2>Menampilkan Data Pasien</h2>
        <br>
        <form action="index.php" method="GET">
            <br><br>

            <table border="1">

                <tr>
                    <th>
                        Nomor Pasien
                    </th>
                    <th>
                        Nama Pasien
                    </th>
                    <th>
                        Jenis Kelamin
                    </th>
                    <th>
                        Umur Pasien
                    </th>
                    <th>
                        Ruangan Pasien
                    </th>
                    <th>
                        Dokter Pengawas Pasien
                    </th>
                    <th>
                        Edit Data
                    </th>

                </tr>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi, "select * from pasien");
                while ($d = mysqli_fetch_array($data)) {

                ?>
                    <tr>
                        <td><?php echo $d['NomorP']; ?></td>
                        <td><?php echo $d['NamaP']; ?></td>
                        <td><?php echo $d['JKelamin']; ?></td>
                        <td><?php echo $d['UmurP']; ?></td>
                        <td><?php echo $d['RuanganP']; ?></td>
                        <td><?php echo $d['DokterP']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['NomorP']; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $d['NomorP']; ?>"onclick="return confirm('Data Akan di Hapus ?')">Delete</a>
                        </td>
                    </tr>

                <?php }
                ?>
                <tr>
                    <td colspan="8" align="Right">
                        <a href="form_input_pasien.php">Tambah Data</a>
                    </td>
            </table>
        </form>
    </center>
</body>


</html>