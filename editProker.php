<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Edit Data</h2>
    <form action="index.php?edit=1" method="post">
        <label> Data ke : <?php echo $_GET['nomor']; ?></label><br>
        <label>Nama Program: <input type="text" name="nama" placeholder="nama program" value="<?php echo $_GET['nama'] ?>" required> </label><br>
        <label>Surat Keterangan: <input type="text" name="surat" placeholder="surat keterangan" value="<?php echo $_GET['surat'] ?>" required></label>
        <input type="hidden" name="nomor" value="<?php echo $_GET["nomor"]; ?>"><input type="hidden" name="edit" value=1><br>
        <button>Simpan</button>
    </form>
</body>

</html>