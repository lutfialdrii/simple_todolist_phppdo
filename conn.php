<?php
$dbserver = "localhost";
$dbname = "tasks";
$dbuser = "root";
$dbpassword = "";

$connection = null;
try {
    $connection = new PDO("mysql:host=$dbserver;dbname=$dbname", $dbuser, $dbpassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Koneksi Gagal: " . $e->getMessage());
}