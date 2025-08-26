<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width,initial-scale-1.0">
    <title>tambah data siswa</title>
</head>
<body>
    <h2>formulir tambah data siswa</h2>
    <form action="proses_tambah.php" method="POST">
        <label for="nama">nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="alamat">alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea><br><br>

        <button type="submit">tambah</button>
    </form>
</body>
</html>

