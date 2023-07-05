<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "crud";

$koneksi = mysqli_connect ($host, $user, $pass, $db);
if (!$koneksi) {
    exit ("Gagal melakukan koneksi");
}

?>