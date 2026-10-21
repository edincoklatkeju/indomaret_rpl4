<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/indomaret_rpl4/assets/css/style.css">
</head>

<body>
    <?php
    // Mendefinisikan ROOTPATH sebagai path ke direktori root proyek
    define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/indomaret_rpl4');
    include ROOTPATH . '/config/config.php';
    include ROOTPATH . '/includes/header.php';
    ?>

    <h2>Daftar Pengguna Sistem</h2>
<div class="container">
    <ul class="responsive-table">

        <li class="table-header">
            <div class="col col-1">No</div>
            <div class="col col-2">Nama Kasir</div>
            <div class="col col-3">No. Telepon</div>
            <div class="col col-4">Alamat</div>
        </li>

        <?php
        include ROOTPATH . '/config/config.php';

        $query = "SELECT * FROM tabel_kasir";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query gagal: " . mysqli_error($connection));
        }

        $no = 1;

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <li class="table-row">
                <div class="col col-1" data-label="No">
                    <?= $no++ ?>
                </div>

                <div class="col col-2" data-label="Nama Kasir">
                    <?= htmlspecialchars($row['nama_kasir']) ?>
                </div>

                <div class="col col-3" data-label="No. Telepon">
                    <?= htmlspecialchars($row['no_telp']) ?>
                </div>

                <div class="col col-4" data-label="Alamat">
                    <?= htmlspecialchars($row['alamat']) ?>
                </div>
            </li>
        <?php
        }
        ?>

    </ul>
</div>
```