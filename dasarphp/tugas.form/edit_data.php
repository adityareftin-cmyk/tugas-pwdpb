<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id =$_GET['id'];
    $query ="SELECT * FROM siswa WHERE id = $id";
    $result =$koneksi->query($query);
    $data =$result->fetch_assoc();
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>

<html lang="id">
<head>
    <meta charset="UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data siswa</title>
</head>
<body>
    <h2>edit data siswa</h2>
    <form action="proses_edit.php"method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label for="nama">nama:</label>
        <input type="next" id="nama" name="nama" value="<?php echo $data['nama']; ?>"required><br><br>

        <label for="email>email:</label>
        <input type="email" id="email" name="email" value="<?php echo $data['email']; ?>" required><br><br>

        <button type="submit">simpan perubahan</button>
    </form>
</body>
</html>
