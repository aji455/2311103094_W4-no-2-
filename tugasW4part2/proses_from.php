<?php
session_start();

$_SESSION['nama'] = $_POST['nama'];
$_SESSION['umur'] = $_POST['umur'];

header("Location: dashboard.php");
exit();
?>
