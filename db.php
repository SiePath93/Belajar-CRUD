
<?php
$servername = "localhost";
$username = "customer"; // diganti sama yang tak kasih tadi
$password = "cc";
$dbname = "Gudangg"; //ini diganti pake nama db yang baru, tak buatin sekalian, diperhatiin

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

//uda, gtu aja
// selanjutnya tinggal di coding
?>