<?php
session_start();

// Data login (username & password)
$user = "admin";
$pass = "123";

// Tangkap input dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username & password cocok
if ($username === $user && $password === $pass) {
    $_SESSION['username'] = $username; // Simpan session
    header("Location: dashboard.php");
    exit();
} else {
    $_SESSION['error'] = "Username atau Password salah!";
    header("Location: login.php");
    exit();
}
?>
