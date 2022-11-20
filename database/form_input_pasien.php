<html>

<head>
    <title>Form Tambah Data Pasien</title>
</head>

<body>
    <center>
        <form action="proses_simpan.php" method="POST">
            <table border="0">
                <tr>
                    <td colspan="2" width="400" align="center">
                        <h2>FORM INPUT DATA PASIEN</h2>
                    </td>
                </tr>
                <tr>
                    <td width="150">Nomor Pasien</td>
                    <td width="250"><input type="text" name="NomorP" value=""></td>
                </tr>
                <tr>
                    <td width="150">Nama Pasien</td>
                    <td width="250"><input type="text" name="NamaP" value=""></td>
                </tr>
                <tr>
                    <td width="150">Jenis Kelamin</td>
                    <td width="250">
                        <input type="radio" name="JKelamin" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="JKelamin" value="Perempuan">Perempuan
                    </td>
                </tr>

                <tr>
                    <td width="150">Umur Pasien</td>
                    <td width="250"><input type="text" name="UmurP" value=""></td>
                </tr>
                <tr>
                    <td width="150">Ruangan Pasien</td>
                    <td>
                        <select class="form-control" name="RuanganP" id="ruangan">
                            <option="">==Pilih Ruangan==</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="150">Dokter Pengawas Pasien</td>
                    <td width="250"><input type="text" name="DokterP" value=""></td>
                </tr>
                <tr>
                    <td colspan="2" width="400"></td>
                </tr>
                <tr>
                    <td colspan="2" width="400" align="center">
                        <a href="index.php">Back</a>
                        <input type="submit" value="Simpan" class="tombol">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>