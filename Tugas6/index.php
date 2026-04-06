<?php
$hasil = false;

if (isset($_POST['submit'])) {

    $npm      = $_POST['npm'];
    $nama     = $_POST['nama'];
    $prodi    = $_POST['prodi'];
    $semester = (int) $_POST['semester'];
    $ukt      = (int) $_POST['ukt'];

    $diskon = 0;

    if ($ukt >= 5000000) {
        $diskon = 10;

        if ($semester > 8) {
            $diskon = 15;
        }
    }

    $potongan = $ukt * ($diskon / 100);
    $bayar = $ukt - $potongan;

    $hasil = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran UKT</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <h2>Menu Diskon Pembayaran UKT</h2>

    <form method="POST">

        <label>NPM</label>
        <input type="text" name="npm" required>

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>Prodi</label>
        <input type="text" name="prodi" required>

        <label>Semester</label>
        <input type="number" name="semester" required>

        <label>Biaya UKT (Rp)</label>
        <input type="number" name="ukt" required>

        <button type="submit" name="submit">Hitung Diskon</button>
    </form>

    <?php if ($hasil): ?>
        <div class="hasil">
            <h3>Luaran Yang Diharuskan</h3>

            <p><b>NPM :</b> <?= $npm ?></p>
            <p><b>Nama :</b> <?= $nama ?></p>
            <p><b>Prodi :</b> <?= $prodi ?></p>
            <p><b>Semester :</b> <?= $semester ?></p>
            <p><b>Biaya UKT :</b> Rp <?= number_format($ukt,0,',','.') ?></p>
            <p><b>Diskon :</b> <?= $diskon ?>%</p>
            <p><b>Yang Harus Dibayar :</b> 
                Rp <?= number_format($bayar,0,',','.') ?>
            </p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>