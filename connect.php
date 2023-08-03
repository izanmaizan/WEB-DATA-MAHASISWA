<?php
// Sebelum di modifikasi
// Informasi koneksi database
// $servername = "localhost";  // Nama server database (biasanya localhost)
// $username = "root";         // Username untuk akses ke database
// $password = "";             // Password untuk akses ke database
// $database = "akademik";     // Nama database yang akan digunakan

// // Membuat koneksi ke database
// $connect = mysqli_connect($servername, $username, $password, $database);

// // Mengecek apakah koneksi berhasil
// if (!$connect)
// {
//     // Jika koneksi gagal, tampilkan pesan kesalahan dan hentikan eksekusi skrip
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

// // Jika koneksi berhasil, tampilkan pesan koneksi berhasil
// echo "Koneksi berhasil";

// // Menutup koneksi ke database
// mysqli_close($connect);

// Setelah di modifikasi
// Informasi koneksi database
$hos = "localhost";         // Nama server database (biasanya localhost)
$uname = "root";            // Username untuk akses ke database
$pswd = "";                 // Password untuk akses ke database
$nama_db = "akademik";      // Nama database yang akan digunakan

// Membuat koneksi ke database
$connect = mysqli_connect($hos, $uname, $pswd, $nama_db) or die("Gagal terhubung ke server MySQL");

// Memilih database yang akan digunakan
mysqli_select_db($connect, $nama_db) or die("Gagal memilih database!");
?>