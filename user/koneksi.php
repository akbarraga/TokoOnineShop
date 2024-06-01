<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "co";

$conn = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

?>