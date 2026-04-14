<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal nomer 2</title>

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
            margin: 8px 0;
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

<h3>Soal 2 - Bilangan Genap (dengan input)</h3>

<form method="post">
    Angka Awal:<br>
    <input type="number" name="awal"><br>

    Angka Akhir:<br>
    <input type="number" name="akhir"><br><br>

    <button type="submit">Tampilkan</button>
</form>

<div class="hasil">
<?php
$awal  = $_POST['awal'] ?? null;
$akhir = $_POST['akhir'] ?? null;

if ($awal !== null && $akhir !== null) {

    echo "Bilangan genap dari $awal sampai $akhir:<br><br>";

    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 == 0) {
            echo $i . " - ";
        }
    }
}
?>
</div>

</body>
</html>