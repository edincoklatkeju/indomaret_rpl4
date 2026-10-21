<?php
$connection = mysqli_connect(
    "localhost",
    "root",
    "",
    "indomaret"
);

if (!$connection) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>