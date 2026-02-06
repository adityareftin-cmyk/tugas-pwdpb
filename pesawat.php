<?php
// DATA PESAWAT SESUAI KETENTUAN
$data_pesawat = array(
    "GRD" => array(
        "nama" => "Garuda",
        "Eksekutif" => 1500000,
        "Bisnis"    => 900000,
        "Ekonomi"   => 500000
    ),
    "MPT" => array(
        "nama" => "Merpati",
        "Eksekutif" => 1200000,
        "Bisnis"    => 800000,
        "Ekonomi"   => 400000
    ),
    "BTV" => array(
        "nama" => "Batavia",
        "Eksekutif" => 1000000,
        "Bisnis"    => 700000,
        "Ekonomi"   => 300000
    )
);
?>
   
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3.9</title>
    <style>
        body {
            font-family: "Times New Roman";
            font-size: 14px;
        }

        /* FORM */
        .box {
            width: 450px;
            border: 2px solid blue;
            padding: 20px;
        }
        .judul {
            text-align: center;
            font-weight: bold;
            margin-bottom: 15px;
        }
        table {
            border-collapse: collapse;
        }
        td {
            padding: 5px;
        }
        .btn {
            padding: 4px 12px;
            margin-right: 5px;
        }

        /* TIKET */
        .tiket {
            width: 360px;
            border: 2px dashed #000;
            padding: 15px;
            margin-top: 20px;
            font-family: Arial;
        }
        .tiket-judul {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }
        .tiket table {
            width: 100%;
        }
        .tiket td {
            padding: 4px;
        }
        .total {
            font-weight: bold;
            border-top: 1px solid #000;
        }
    </style>
</head>

<body>

<div class="box">
    <div class="judul">TIKET ONLINE JAKARTA - MALAYSIA</div>

    <form method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Pilih Kode Pesawat</td>
                <td>:</td>
                <td>
                    <select name="kode">
                        <option value="GRD">GRD</option>
                        <option value="MPT">MPT</option>
                        <option value="BTV">BTV</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pilih Kelas</td>
                <td>:</td>
                <td>
                    <input type="radio" name="kelas" value="Eksekutif" required> Eksekutif<br>
                    <input type="radio" name="kelas" value="Bisnis"> Bisnis<br>
                    <input type="radio" name="kelas" value="Ekonomi"> Ekonomi
                </td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td>
                    <select name="jumlah">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="simpan" value="SIMPAN" class="btn">
                    <input type="reset" value="BATAL" class="btn">
                </td>
            </tr>
        </table>
    </form>
</div>

<?php
if (isset($_POST['simpan'])) {

    $nama   = $_POST['nama'];
    $kode   = $_POST['kode'];
    $kelas  = $_POST['kelas'];
    $jumlah = $_POST['jumlah'];

    $nama_pesawat = $data_pesawat[$kode]['nama'];
    $harga        = $data_pesawat[$kode][$kelas];
    $total        = $harga * $jumlah;

    // OUTPUT TIKET (echo + print)
    echo "<div class='tiket'>";
    echo "<div class='tiket-judul'>TIKET PENERBANGAN</div>";

    print "<table>";
    print "<tr><td>Nama Pemesan</td><td>:</td><td>$nama</td></tr>";
    print "<tr><td>Kode Pesawat</td><td>:</td><td>$kode</td></tr>";
    print "<tr><td>Nama Pesawat</td><td>:</td><td>$nama_pesawat</td></tr>";
    print "<tr><td>Kelas</td><td>:</td><td>$kelas</td></tr>";
    print "<tr><td>Harga Tiket</td><td>:</td><td>Rp ".number_format($harga,0,',','.')."</td></tr>";
    print "<tr><td>Jumlah Tiket</td><td>:</td><td>$jumlah</td></tr>";
    print "<tr class='total'><td>Total Bayar</td><td>:</td>
           <td>Rp ".number_format($total,0,',','.')."</td></tr>";
    print "</table>";

    echo "</div>";
}
?>

</body>
</html>