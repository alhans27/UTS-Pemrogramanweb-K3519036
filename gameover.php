<?php

// Menyimpan score akhir
$score = $_SESSION['score'];
$nama = $_COOKIE['nama'];

// Header html
require("header.html");
?>

<!-- Tampilan Permainan -->
<div class="content">
    <!-- Logo Permainan -->
    <img class="mb-4" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.vexels.com%2Fmedia%2Fusers%2F3%2F139161%2Fisolated%2Fpreview%2Fc76ee72de9a5b980c5f0e0d6b7bac0e0-cruce-adem-s-a-adir-by-vexels.png&f=1&nofb=1" alt="Logo Penjumlahan" width="72" height="72">

    <!-- Kalimat ketika Permainan Selesai -->
    <h1 class="h3 mb-3 font-weight-normal">Hello<br><?= $nama?></h1>
    <h2 class="h4 mb-3 font-weight-normal">Sayang Permainan Sudah Selesai.</h2>

    <!-- Menampilkan score akhir -->
    <p>Score Kamu : <?= $score;?></p>

    <!-- Menampilkan Tabel Score Pemain-Pemain dari yang terbanyak -->
    <?php include("dbconnect.php"); ?>

    <!-- Tombol untuk memulai ulang permainan -->
    <a class="mt-5 btn btn-lg btn-warning btn-block" href="index.php" role="button">Main Lagi</a>
    <p class="mt-5 mb-3"><a href="login.php">Berhenti Bermain</a></p>

    <!-- Copyright -->
    <p class="mt-5 mb-3 text-muted">© Pemrograman Website 2021</p>
</div>

<?php
session_destroy();

// Footer html
require("footer.html");

?>