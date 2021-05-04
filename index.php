<?php 

session_start();

// Mengatur nilai awal dari lives dan score dalam permainan
$_SESSION['lives'] = 5;
$_SESSION['score'] = 0;

// Mengarahkan ke halaman LOGIN apabila belum pernah LOGIN
include_once("cek.php");

// Header html
require("header.html");

?>

<!-- Tampilan halaman awal game -->
<div class="content">
  <!-- Logo Permainan -->
  <img class="mb-4" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.vexels.com%2Fmedia%2Fusers%2F3%2F139161%2Fisolated%2Fpreview%2Fc76ee72de9a5b980c5f0e0d6b7bac0e0-cruce-adem-s-a-adir-by-vexels.png&f=1&nofb=1" alt="Logo Penjumlahan" width="72" height="72">

  <!-- Kalimat Pembuka -->
  <h1 class="h3 mb-3 font-weight-normal">Hello<br><?php echo $_COOKIE['nama']?></h1>
  <h2 class="h4 mb-3 font-weight-normal">Selamat Datang Kembali di Permainan Ini</h2>
  
  <!-- Tombol memulai bermain -->
  <a class="btn btn-lg btn-warning btn-block" href="game.php" role="button">Mulai Bermain</a>
  <p class="mt-5 mb-3">Bukan Anda? <a href="login.php">Klik Disini</a></p>

  <!-- Copyright -->
  <p class="mt-5 mb-3 text-muted">© Pemrograman Website 2021</p>
</div>

<!-- Footer html -->
<?php require("footer.html"); ?>