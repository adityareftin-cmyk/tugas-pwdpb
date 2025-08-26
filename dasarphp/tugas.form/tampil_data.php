<?php
include 'koneksi.php';

$query = "SELECT * FORM siswa";
$result = $koneksi->query($query);

if ($result->num_rows > 0) {
    echo "<table border='1'>
           <tr>
              <th>ID</th>
              <th>nama</th>
              <th>email</th>
              <th>alamat</th>
            </tr>";
    while($row =$result->fetch_assoc()) {
        echo "<tr>
                 <td>" . $row['id'] . "</td>
                 <td>" . $row['nama'] . "</td>
                 <td>" . $row['email'] . "</td>
                 <td>" . $row['alamat'] . "</td>
              </tr>";                  
    }
    echo "</table>";
} else {
    echo "tidak ada data siswa.";
}
?>