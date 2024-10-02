<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "smkn1buahdua";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengatur pengaturan karakter
mysqli_set_charset($conn, "utf8");
