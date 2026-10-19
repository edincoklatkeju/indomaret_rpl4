<?php
// mendefinisikan ROOTPATH sebagai path ke direktori root proyek
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/indomaret_rpl4');

include ROOTPATH . '/includes/header.php';
?>

<center style="margin-top: 5opx;">
    <h1>Tambah Data Kasir</h1>
    <form action="pages/process/cashiers_process.php" method="post">
            <input type="text" name="nama_kasir"
            placeholder="Masukkan nama kasir..."
                required>
            <input type="text" name="no_telp"
            placeholder="Masukkan nomor telp kasir..."
                required>
            <input type="text" name="alamat"
            placeholder="Masukkan alamat kasir..."
                required>
        <button type="submit">Tambah kasir</button>
    </form>
</center>
