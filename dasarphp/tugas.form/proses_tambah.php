<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama - $_POST['nama'];
    $email - $_POST['email'];
    $alamat - $_POST['alamat'];

    $query = "INSERT INTO siswa (nama,email,alamat) VALUES ('$nama','$email','$alamat')";
    if ($koneksi->query($query) === TRUE) {
        echo "data berhasil ditambahkan.";
        echo "<br><a href='tampil_data.php'>lihat data</a>";
    } else {
        echo "error: " . $query . "<br>" . $koneksi->error;
    }
}
?>