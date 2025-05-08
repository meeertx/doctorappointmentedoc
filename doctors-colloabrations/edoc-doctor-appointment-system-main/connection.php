<?php
$servername = "localhost";
$username = "root";        // MySQL kullanıcı adı
$password = "";            // MySQL şifresi
$dbname = "edoc";          // Veritabanı adı

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
