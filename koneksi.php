<?php
$host = "localhost";
$db = "restaurant";
$user = "root";
$password = "";

$con = mysqli_connect($host, $user, $password, $db);

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>
