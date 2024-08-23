<?php
session_start();


if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php"); // Jika belum login, arahkan ke halaman login
    exit;
}


if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php"); // Arahkan ke halaman login setelah logout
    exit;
}
?>

<h2>About</h2>
<p>Hallo inilah aku Kalla Tegar Sujana</p>
<a href="home.php">Kembali ke Home</a> <!-- Link kembali ke Home -->
<a href="?logout=1">Logout</a> <!-- Link untuk logout -->
