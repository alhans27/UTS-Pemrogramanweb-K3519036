<?php

// Menyimpan nilai lives dan score sementara
$lives = $_SESSION['lives'];
$score = $_SESSION['score'];
$nama = $_COOKIE['nama'];

// Header html
require("header.html");
?>

<!-- Tampilan Permainan -->
<div class="content">
    <!-- Logo Permainan -->
    <img class="mb-4" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.vexels.com%2Fmedia%2Fusers%2F3%2F139161%2Fisolated%2Fpreview%2Fc76ee72de9a5b980c5f0e0d6b7bac0e0-cruce-adem-s-a-adir-by-vexels.png&f=1&nofb=1" alt="Logo Penjumlahan" width="72" height="72">

    <!-- Kalimat ketika Pemain menjawab BENAR -->
    <h1 class="h3 mb-3 font-weight-normal">Hello<br><?= $nama?></h1>
    <h2 class="h4 mb-3 font-weight-normal bg-success">Selamat Jawaban Kamu BENAR</h2>

    <!-- Menampilkan lives dan score sementara -->
    <p>Lives : <?= $lives;?> | Score : <?= $score;?></p>

    <!-- Tombol untuk permainan selanjutnya -->
    <a class="btn btn-lg btn-warning btn-block" href="game.php" role="button">Game Selanjutnya</a>
    <p class="mt-5 mb-3"><a href="index.php">Berhenti Bermain</a></p>

    <!-- Copyright -->
    <p class="mt-5 mb-3 text-muted">© Pemrograman Website 2021</p>
</div>

<!-- Footer html -->
<?php require("footer.html"); ?>