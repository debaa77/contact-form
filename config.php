<?php
// Mengatur detail koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_form";

// Membuat koneksi menggunakan MySQLi
$conn = mysqli_connect($servername, $username, $password, $database);
// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal:");
}
