<?php

require_once "db.php";

$idbarang = $_POST['id_barang'];
$namabarang = $_POST['nama_barang'];
$jumlahbarang = $_POST['jumlah_barang'];

$sql="UPDATE gudangbarang SET nama_barang= '".$namabarang."', jumlah_barang= '".$jumlahbarang."'
     WHERE id_barang = '".$idbarang."'";


if ($conn ->query($sql)){
  echo "Data sudah berhasil diupdate <br>";
  echo '<a href="index.php">kembali ke index.php</a>';
}else{
  die("Error: " . $conn ->error);
}

exit;