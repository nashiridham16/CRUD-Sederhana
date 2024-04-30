<html>

<head>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function konfirmasiHapus(nomor) {
            var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data?");
            if (konfirmasi) {
                window.location.href = 'deleteProker.php?nomor=' + nomor;
            } else {
                // Jika pengguna membatalkan penghapusan, tidak ada tindakan yang diambil
            }
        }
    </script>
</head>

<body>
    <h2>Daftar Program Kerja BEM</h2>
    <table>
        <tbody>
            <tr>
                <td>No</td>
                <td>Nama Program Kerja</td>
                <td>Surat Keterangan</td>
            </tr>
            <?php
            foreach ($proker[0] as $proker) {
                echo "<tr>
                    <td> $proker[nomorProgram] </td>
                    <td> $proker[namaProgram]</td>
                    <td> $proker[suratKeterangan]</td>
                    <td style='text-align:center'>
                        <a href='editProker.php?nomor=$proker[nomorProgram]&nama=$proker[namaProgram]&surat=$proker[suratKeterangan]'>Edit</a>
                        <a href='javascript:konfirmasiHapus($proker[nomorProgram]);'>Delete</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
    <form method="post" action="addProker.php">
        <input type="submit" name="button" id="button" value="+ Tambah Data" />
    </form>
</body>

</html>
