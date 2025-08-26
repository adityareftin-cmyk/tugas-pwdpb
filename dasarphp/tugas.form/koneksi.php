<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_siswa";

// membuat koneksi
$koneksi = new mysqli($host, $user, $pass, $dbname);

//mengecek koneksi
if ($koneksi->connect_error) {
    die("koneksi gagal: " . $koneksi->connect_error);
}
?>