<?php
$servername = "localhost"; // Nama server, biasanya localhost
$username = "root";        // Username database Anda
$password = "";            // Password database Anda
$dbname = "db_toko"; // Nama database Anda

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error()); // Hentikan script jika gagal
}
// echo "Koneksi berhasil!"; // (Opsional) Tampilkan pesan berhasil saat diakses langsung
?>