<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Tambah Data</h2>
    <form action="index.php?add=1" method="post">
        <label>Data ke : <input type="text" name="nomor" required></label><br>
        <label>Nama Program : <input type="text" name="nama" required></label><br>
        <label>Surat Keterangan : <input type="text" name="surat" required></label><input type="hidden" name="add" value=1><br>
        <button>Tambah</button>
    </form>
</body>

</html>