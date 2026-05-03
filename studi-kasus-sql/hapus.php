<?php

include "koneksi.php";

$id = $_GET['id'];

$stmt = $conn->prepare(
"DELETE FROM buku WHERE id = ?"
);

$stmt->bind_param("i", $id);

if ($stmt->execute()) {

header("Location: index.php?pesan=sukses_hapus");

} else {

echo "Gagal hapus data";

}

?>