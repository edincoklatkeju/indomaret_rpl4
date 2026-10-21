
<?php
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/indomaret_rpl4');

include ROOTPATH . '/includes/header.php';
?>

<link rel="stylesheet" href="/indomaret_rpl4/assets/css/style.css">

<div class="cashier-page">
    <div class="cashier-card">

        <div class="cashier-header">
            <h1>Tambah Data Kasir</h1>
            <p>Lengkapi informasi kasir di bawah ini.</p>
            <div class="cashier-line"></div>
        </div>

        <form
            class="cashier-form"
            action="../../process/cashiers_process.php"
            method="POST"
        >
            <input type="hidden" name="action" value="add">

            <div class="cashier-field">
                <label for="nama_kasir">Nama Kasir</label>
                <input
                    type="text"
                    id="nama_kasir"
                    name="nama_kasir"
                    placeholder="Masukkan nama kasir..."
                    required
                >
            </div>

            <div class="cashier-field">
                <label for="no_telp">Nomor Telepon</label>
                <input
                    type="tel"
                    id="no_telp"
                    name="no_telp"
                    placeholder="Masukkan nomor telepon..."
                    required
                >
            </div>

            <div class="cashier-field">
                <label for="alamat">Alamat</label>
                <input
                    type="text"
                    id="alamat"
                    name="alamat"
                    placeholder="Masukkan alamat kasir..."
                    required
                >
            </div>

            <button type="submit" class="cashier-submit">
                + Tambah Kasir
            </button>
        </form>

        <p class="cashier-note">
            Pastikan data kasir sudah benar sebelum disimpan.
        </p>

    </div>
</div>
