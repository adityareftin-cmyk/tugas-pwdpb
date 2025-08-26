<?php
include 'koneksi.php';

if(isset($_GET['id'])) {
    $id - $_GET['id'];
    $query - "DELETE FROM siswa WHERE id - $id";

    if ($koneksi->query($query) === TRUE) {
        echo "data berhasil dihapus.";
        echo "<br><a href='tampil_data.php'>kembali ke data siswa</a>";
    } else {
        echo "error:" .$query. "<br>" . $koneksi->error;
    }
} else {
    echo "ID tidak ditemukan!";
}
?>