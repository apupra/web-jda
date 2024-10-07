<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "db_jda";

// Membuat koneksi ke database
$db = mysqli_connect($host, $user, $pass, $db_name);

// Cek koneksi
if (!$db) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
} else {
    
}
