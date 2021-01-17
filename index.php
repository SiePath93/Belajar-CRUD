

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once "db.php";

$sql = "SELECT * FROM gudangbarang";

$hasil = $conn->query($sql);

if ($hasil->num_rows > 0) {
  
?>

<table border="1" cellpadding="3">
  <tr>
    <th>No</th>
    <th>IDBarang</th>
    <th>NamaBarang</th>
    <th>JumlahBarang</th>
    <th>Aksi</th>
  </tr>

<?php
  $nomor = 0;

  //output data each row
  while($row = $hasil->fetch_assoc())
    {
      $nomor++;
      ?>
  
  <tr>
    <td><?=$nomor;?></td>
    <td><?=$row['id_barang'];?></td>
    <td><?=$row['nama_barang'];?></td>
    <td><?=$row['jumlah_barang'];?></td>
    <td>
      <a href="form_update.php?id_barang=<?=$row['id_barang'];?>">Ubah Data</a>
      <a href="proses_delete.php?id_barang=<?=$row['id_barang'];?>">Hapus Data</a>
    </td>

  </tr>


  <?php
    }
    echo "</table>";
} else {
    echo "0 results";
}
  ?>
</table>
<a href="form_add.php">Tambah Data</a> <!-- ini utk buat link mengarah ke suatu URL-->