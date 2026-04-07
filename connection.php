<?php
$host = "sql111.infinityfree.com";
$user = "if0_41597545";
$pass = "Arfan2009";
$db   = "if0_41597545_votera2526";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Gagal sambung ke database: " . mysqli_connect_error());
}
?>
