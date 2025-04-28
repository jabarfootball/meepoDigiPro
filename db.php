<?php
$host = "localhost";
$user = "u128376644_meepodigipro";
$pass = "Almaulid028";
$dbname = "u128376644_meepodigipro";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>
