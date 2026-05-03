<?php

include "koneksi.php";

$id = $_GET['id'];

$stmt = $conn->prepare(
"SELECT * FROM buku WHERE id = ?"
);

$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>

<h2>Edit Buku</h2>

<form method="POST" action="proses_edit.php">

<input type="hidden"
name="id"
value="<?php echo $data['id']; ?>">

Judul:

<br>
<input type="text"
name="judul"
value="<?php echo $data['judul']; ?>"
required>

<br><br>

Penulis:

<br>
<input type="text"
name="penulis"
value="<?php echo $data['penulis']; ?>"
required>

<br><br>

Tahun:

<br>
<input type="number"
name="tahun"
value="<?php echo $data['tahun_terbit']; ?>"
required>

<br><br>

Harga:

<br>
<input type="number"
name="harga"
value="<?php echo $data['harga']; ?>"
required>

<br><br>

Stok:

<br>
<input type="number"
name="stok"
value="<?php echo $data['stok']; ?>"
required>

<br><br>

<button type="submit">
Update
</button>

</form>

</body>
</html>