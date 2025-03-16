<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Silakan masukkan nama dan umur Anda:</p>

    <form method="POST" action="proses_form.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label for="umur">Umur:</label>
        <input type="number" name="umur" required><br><br>

        <button type="submit">Kirim</button>
    </form>

    <?php if (isset($_SESSION['nama']) && isset($_SESSION['umur'])): ?>
        <h3>Hasil:</h3>
        <p>Nama: <?php echo $_SESSION['nama']; ?></p>
        <p>Umur: <?php echo $_SESSION['umur']; ?> tahun</p>
        <p>Status: <?php echo ($_SESSION['umur'] >= 18) ? "Dewasa" : "Belum Dewasa"; ?></p>
    <?php endif; ?>

    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
