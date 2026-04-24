<?php
include "koneksi.php";

$pesan = "";

if (isset($_GET['pesan'])) {
    $pesan = $_GET['pesan'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>

<h2>Data Buku</h2>

<?php
if ($pesan == "sukses_tambah") {
    echo "<p style='color:green'>Data berhasil ditambahkan</p>";
}

if ($pesan == "gagal_tambah") {
    echo "<p style='color:red'>Data gagal ditambahkan</p>";
}

if ($pesan == "sukses_edit") {
    echo "<p style='color:green'>Data berhasil diupdate</p>";
}

if ($pesan == "sukses_hapus") {
    echo "<p style='color:green'>Data berhasil dihapus</p>";
}
?>

<a href="tambah.php">
    <button>Tambah Buku</button>
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tahun</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php

$stmt = $conn->prepare("SELECT * FROM buku");
$stmt->execute();

$result = $stmt->get_result();

while ($data = $result->fetch_assoc()) {

?>

<tr>

<td><?php echo $data['id']; ?></td>
<td><?php echo $data['judul']; ?></td>
<td><?php echo $data['penulis']; ?></td>
<td><?php echo $data['tahun_terbit']; ?></td>
<td><?php echo $data['harga']; ?></td>
<td><?php echo $data['stok']; ?></td>

<td>

<a href="edit.php?id=<?php echo $data['id']; ?>">
Edit
</a>

|

<a href="hapus.php?id=<?php echo $data['id']; ?>">
Hapus
</a>

</td>

</tr>

<?php
}
?>

</table>

</body>
</html>