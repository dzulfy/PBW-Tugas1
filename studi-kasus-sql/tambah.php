<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>

<h2>Tambah Buku</h2>

<form method="POST" action="proses_tambah.php">

Judul:

<br>
<input type="text" name="judul" required>

<br><br>

Penulis:

<br>
<input type="text" name="penulis" required>

<br><br>

Tahun Terbit:

<br>
<input type="number" name="tahun" required>

<br><br>

Harga:

<br>
<input type="number" name="harga" required>

<br><br>

Stok:

<br>
<input type="number" name="stok" required>

<br><br>

<button type="submit">
Simpan
</button>

</form>

</body>
</html>