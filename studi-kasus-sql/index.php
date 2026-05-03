<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}

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

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        button {
            padding: 8px 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn-tambah {
            background-color: #007bff;
            color: white;
        }

        .btn-logout {
            background-color: #dc3545;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .pesan {
            margin-top: 10px;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>

</head>

<body>

<div class="container">

    <div class="top-bar">
        <h2>Data Buku</h2>

        <a href="logout.php">
            <button class="btn-logout">Logout</button>
        </a>
    </div>

    <div class="pesan">
        <?php
        if ($pesan == "sukses_tambah") {
            echo "<p class='success'>Data berhasil ditambahkan</p>";
        }
        if ($pesan == "gagal_tambah") {
            echo "<p class='error'>Data gagal ditambahkan</p>";
        }
        if ($pesan == "sukses_edit") {
            echo "<p class='success'>Data berhasil diupdate</p>";
        }
        if ($pesan == "sukses_hapus") {
            echo "<p class='success'>Data berhasil dihapus</p>";
        }
        ?>
    </div>

    <a href="tambah.php">
        <button class="btn-tambah">+ Tambah Buku</button>
    </a>

    <table border="0">
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
                <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                <a href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>