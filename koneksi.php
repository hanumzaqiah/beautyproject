<?php
$host = "sql100.infinityfree.com";
$user = "if0_41723544";
$pass = "Hanumzaqiah28";
$db   = "if0_41723544_beautyproject";

$conn = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// set charset biar aman
mysqli_set_charset($conn, "utf8mb4");
?>