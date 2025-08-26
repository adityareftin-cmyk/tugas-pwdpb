<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $id =$_POST['id'];
    $nama =$_POST['nama'];
    $email =$_POST['email'];
    $alamat =$_POST['alamat'];

    $query = "UPDATE" siswa SET nama='$nama', email='$email',alamat='$alamat' WHERE id=$id";
    if ($koneksi->query($query) === TRUE) {
    echo "data berhasil diperbarui.";
    echo "<br><a href='tampil_data.php'>kembali ke data siswa</a>";
  } else {
    echo "error: .$query ."<br>" . $koneksi->error;
  }
?>
