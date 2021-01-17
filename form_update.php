<?php
require_once "db.php";

$idbarang = $_GET['id_barang'];
$result = mysqli_query($conn, "select * from gudangbarang where id_barang = '$idbarang'");
 if (! $result) {
 	echo "Tidak dapat menjalankan Query" . mysql_error();
 	exit();
 }

$hasil = mysqli_fetch_row($result);


// $sql = "SELECT * FROM gudangbarang where id_barang = $idbarang";

// $hasil = $conn->query($sql);

//print('<pre>');
//print_r($hasil);


?>
<form action="proses_update.php" method="post">
	<label>id barang</label><input type="text" name="id_barang" value="<?=$hasil[0];?>" disabled><br>
    <input type="hidden" name="id_barang" value="<?=$hasil[0];?>">
	<label>nama barang</label><input type="text" name="nama_barang" value="<?=$hasil[1];?>"><br>
	<label>jumlah barang</label><input type="text" name="jumlah_barang" value="<?=$hasil[2];?>"><br>
	<button type="submit">simpan</button>
	<button>batal(belum jalan)</button>
</form>