<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin-top: 50px;
        }

        h3 {
            color: #333;
        }

        form {
            background: white;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input {
            padding: 8px;
            width: 150px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 8px 15px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        .hasil {
            margin-top: 20px;
            font-weight: bold;
            color: #2c3e50;
        }
    </style>
</head>
<body>

<h3>Soal 1 Jenis Kendaraan</h3>

<form method="POST">
    <label for="roda">Masukkan jumlah roda:</label><br>
    <input type="number" name="roda" id="roda" required><br>
    <button type="submit">Cek</button>
</form>

<div class="hasil">
<?php
$roda = $_POST['roda'] ?? null;

if ($roda !== null) {
    if ($roda == 2) {
        echo "Jenis Kendaraan: Sepeda Motor";
    } elseif ($roda == 4) {
        echo "Jenis Kendaraan: Mobil";
    } elseif ($roda > 4) {
        echo "Jenis Kendaraan: Truk";
    } else {
        echo "Jenis Kendaraan: Tidak diketahui";
    }
}
?>
</div>

</body>
</html>