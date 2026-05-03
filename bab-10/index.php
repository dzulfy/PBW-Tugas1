<?php
session_start();

if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 10px;
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        .username {
            font-weight: bold;
            color: #002855;
        }

        button {
            background: #002855;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #004080;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Haloo 👋</h2>
        <p>Selamat datang di halaman beranda</p>

        <p>Login sebagai: <span class="username">
                <?php echo $_SESSION['nama']; ?>
            </span></p>

        <form action="logout.php" method="post">
            <button type="submit">Logout</button>
        </form>
    </div>

</body>

</html>