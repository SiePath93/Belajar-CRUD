<?php

require_once "db.php";
// kareng id barang di element html nya sudah dihapus jadi dibagian sini nya tidak perlu ada $_POST['id_barang'] nya
//$idbarang = $_POST['id_barang'];
$namabarang = $_POST['nama_barang'];
$jumlahbarang = $_POST['jumlah_barang'];

$sql = "INSERT INTO gudangbarang (nama_barang, jumlah_barang) 
     VALUES ('".$namabarang."','".$jumlahbarang."')";

if ($conn ->query($sql)){
  echo "Data sudah berhasil ditambahkan <br>";
  echo '<a href="index.php">kembali ke index.php</a>';
}else{
  die("Error: " . $conn ->error);
}

exit;