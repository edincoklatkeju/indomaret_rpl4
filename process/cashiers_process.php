<?php

include '../config/config.php';

$nama_kasir = $_POST["nama_kasir"];
$no_telp    = $_POST["no_telp"];
$alamat     = $_POST["alamat"];

if($_POST["action"] == "add"){
    // menambahkan data kasir ke table_kasir di database indomaret_RPL4
    $hasil = mysqli_query($connection, "INSERT INTO tabel_kasir VALUES (NULL, '$nama_kasir', '$no_telp', '$alamat')");

    if(!$hasil){
        echo "
        <script>
        alert('Gagal menambahkan data kasir: " . mysqli_error($connection) . "');
        </script>";
    } else {
        echo "<script>
        alert('Data kasir berhasil ditambahkan.');
        window.location.href='../pages/cashiers/list.php';
        </script>";
    }
}else if($_POST["action"] == "edit"){
    $id_kasir = $_POST["id_kasir"];
    // mengupdate data kasir di table_kasir di database indomaret_RPL4
    $hasil = mysqli_query($connection, "UPDATE tabel_kasir SET nama_kasir='$nama_kasir', no_telp='$no_telp', alamat='$alamat' WHERE id_kasir='$id_kasir'");

    if(!$hasil){
        echo "
        <script>
        alert('Gagal mengupdate data kasir: " . mysqli_error($connection) . "');
        </script>";
    } else {
        echo "<script>
        alert('Data kasir berhasil diupdate.');
        window.location.href='../pages/cashiers/list.php';
        </script>";
    }

}else if($_POST["action"] == "delete"){
    $id_kasir = $_POST["id_kasir"];
    // menghapus data kasir di table_kasir di database indomaret_RPL4
    $hasil = mysqli_query($connection, "DELETE FROM tabel_kasir WHERE id_kasir='$id_kasir'");

    if(!$hasil){
        echo "
        <script>
        alert('Gagal menghapus data kasir: " . mysqli_error($connection) . "');
        </script>";
    } else {
        echo "<script>
        alert('Data kasir berhasil dihapus.');
        window.location.href='../pages/cashiers/list.php';
        </script>";
    }
}