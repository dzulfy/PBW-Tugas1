<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db   = "pemrograman_web_contoh"; 
$port = 8889;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>