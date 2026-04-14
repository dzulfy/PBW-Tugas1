<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL NOMER 3</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin-top: 40px;
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
            text-align: left;
        }

        label {
            font-size: 14px;
        }

        input {
            padding: 8px;
            width: 200px;
            margin: 5px 0;
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
            display: block;
            margin: 10px auto;
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

<h3>Soal 3 Daftar Hewan menggunakan foreach</h3>

<form action="" method="POST">
    <label>Masukkan nama hewan 1:</label><br>
    <input type="text" name="hewan[]" required><br>

    <label>Masukkan nama hewan 2:</label><br>
    <input type="text" name="hewan[]" required><br>

    <label>Masukkan nama hewan 3:</label><br>
    <input type="text" name="hewan[]" required><br>

    <label>Masukkan nama hewan 4:</label><br>
    <input type="text" name="hewan[]" required><br>

    <label>Masukkan nama hewan 5:</label><br>
    <input type="text" name="hewan[]" required><br>

    <button type="submit">SUBMIT</button>
</form>

<div class="hasil">
<?php
$hewan = $_POST['hewan'] ?? [];

if (!empty($hewan)) {
    echo "Daftar Hewan:<br><br>";
    foreach ($hewan as $h) {
        echo "- " . $h . "<br>";
    }
}
?>
</div>

</body>
</html>