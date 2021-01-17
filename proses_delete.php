<?php

require_once "db.php";

$idbarang = $_GET['id_barang'];


$sql="DELETE FROM gudangbarang WHERE  
    id_barang = '$idbarang'";


if ($conn ->query($sql)){
  echo "Data sudah berhasil diupdate";
  header('Location: index.php');

}else{
  die("Error: " . $conn ->error);
}

exit;