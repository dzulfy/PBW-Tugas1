<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL NOMER 4</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin-top: 50px;
        }

        h1 {
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
            font-size: 18px;
            color: #2c3e50;
        }
    </style>
</head>
<body>

<h1>Bilangan Ganjil atau Genap (Ternary Operator)</h1>

<form method="POST">
    Masukkan angka:<br>
    <input type="number" name="angka" required><br>
    <button type="submit">Cek</button>
</form>

<div class="hasil">
<?php
$angka = $_POST['angka'] ?? null;

if ($angka !== null) {
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "Hasil: $hasil";
}
?>
</div>

</body>
</html>