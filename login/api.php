<!-- logout.php -->
<?php
session_start(); // Mulai sesi
session_destroy(); // Menghapus sesi
header("Location: login.php"); // Arahkan kembali ke halaman login
exit();
?>
