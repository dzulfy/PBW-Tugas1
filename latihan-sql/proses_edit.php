<?php

include "koneksi.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$stmt = $conn->prepare(
"UPDATE buku SET

judul = ?,
penulis = ?,
tahun_terbit = ?,
harga = ?,
stok = ?

WHERE id = ?"
);

$stmt->bind_param(
"ssiiii",
$judul,
$penulis,
$tahun,
$harga,
$stok,
$id
);

if ($stmt->execute()) {

header("Location: index.php?pesan=sukses_edit");

} else {

echo "Gagal update data";

}

?>